<?php


$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    
   $this->get('create-employee', 'EmployeeController@index')->name('admin.employee');
   $this->get('list', 'EmployeeController@list')->name('employee.list');
   
   $this->get('cpf', 'AdminController@cpf')->name('admin.cpf');
   $this->post('cpf', 'AdminController@cpfCheck')->name('admin.cpf-check');

      
   $this->get('cnpj', 'AdminController@cnpj')->name('admin.cnpj');
   $this->post('cnpj', 'AdminController@cnpjCheck')->name('admin.cnpj-check');

   $this->post('create', 'EmployeeController@create')->name('employee.create');
    
    $this->get('/', 'AdminController@index')->name('admin.home'); // Route to the admin management
});


$this->get('/', 'Site\SiteController@index')->name('home'); // Route to the site front-end 


Auth::routes();

