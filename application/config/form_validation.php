<?php 



$config = [

		'login_form_validation'=>[

							[
							'field' => 'email',
							'label' => 'Email',
							'rules' => 'required|valid_email'
        
							],
							[
							
							'field' => 'password',
							'label' => 'Password',
							'rules' => 'required'
        
							]

		],

		'category_form_validation'=>[

							[
							'field' => 'name',
							'label' => 'name',
							'rules' => 'required'
        
							],
							[
							'field' => 'parent_id',
							'label' => 'parent',
							'rules' => 'required|is_natural'
        
							],
							[
							'field' => 'description',
							'label' => 'Category description',
							'rules' => ''
							]
							

		]
];