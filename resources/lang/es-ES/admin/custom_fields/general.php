<?php

return [
    'custom_fields'		        => 'Campos personalizados',
    'manage'                    => 'Administrar',
    'field'		                => 'Campo',
    'about_fieldsets_title'		=> 'Acerca de los campos personalizados',
    'about_fieldsets_text'		=> 'Los grupos de campos personalizados te permiten agrupar campos personalizados que se reutilizan frecuentemente para determinados modelos de activos.',
    'custom_format'             => 'Expresión regular personalizada...',
    'encrypt_field'      	        => 'Encriptar el valor de este campo en la base de datos',
    'encrypt_field_help'      => 'CUIDADO: Encriptar un campo hace que no se pueda buscar por él.',
    'encrypted'      	        => 'Encriptado',
    'fieldset'      	        => 'Grupo de campos personalizados',
    'qty_fields'      	      => 'Campos de Cantidad',
    'fieldsets'      	        => 'Grupo de campos personalizados',
    'fieldset_name'           => 'Nombre del grupo',
    'field_name'              => 'Nombre del campo',
    'field_values'            => 'Valores de los Campos',
    'field_values_help'       => 'Agregar opciones seleccionables, una por linea. Lineas en blanco ademas de la primera, serán ignoradas.',
    'field_element'           => 'Elemento de formulario',
    'field_element_short'     => 'Elemento',
    'field_format'            => 'Formato',
    'field_custom_format'     => 'Formato personalizado',
    'field_custom_format_help'     => 'Este campo te permite usar una expresión regex para la validación. Debería empezar con "regex:" - por ejemplo, para validar que un valor de campo personalizado contiene un IMEI válido (15 dígitos numéricos), podrías usar <code>regex:/^[0-9]{15}$/</code>.',
    'required'   		          => 'Obligatorio',
    'req'   		              => 'Obl.',
    'used_by_models'   		    => 'Usado Por Modelos',
    'order'   		            => 'Orden',
    'create_fieldset'         => 'Nuevo grupo de campos',
    'update_fieldset'         => 'Actualizar grupo de campos',
    'fieldset_does_not_exist'   => 'Grupo de campos :id no existe',
    'fieldset_updated'         => 'Grupo de campos actualizado',
    'create_fieldset_title' => 'Crear nuevo grupo de campos',
    'create_field'            => 'Nuevo campo personalizado',
    'create_field_title' => 'Crear nuevo campo personalizado',
    'value_encrypted'      	        => 'El valor de este campo está encriptado en la base de datos. Solo los administradores pueden ver el valor desencriptado',
    'show_in_email'     => '¿Incluir el valor de este campo en las notificaciones por correo de asignaciones de activos? Ten en cuenta que los campos encriptados no se pueden incluir en los correos electrónicos.',
    'help_text' => 'Texto de ayuda',
    'help_text_description' => 'Un texto opcional que aparecerá debajo de los campos del formulario cuando se edite un activo para proporcionar contexto adicional.',
    'about_custom_fields_title' => 'Acerca de los Campos Personalizados',
    'about_custom_fields_text' => 'Los campos personalizados le permiten añadir atributos arbitrarios a los activos.',
    'add_field_to_fieldset' => 'Añadir campo al grupo',
    'make_optional' => 'Requerido - clic para hacerlo opcional',
    'make_required' => 'Opcional - clic para hacerlo requerido',
    'reorder' => 'Reordenar',
    'db_field' => 'Campo de BD',
    'db_convert_warning' => 'ADVERTENCIA. Este campo aparece en la tabla de campos personalizados como <code>:db_column</code>, pero se esperaba <code>:expected</code>.',
    'is_unique' => 'Este valor debe ser único dentro de los activos',
    'unique' => 'Único',
    'display_in_user_view' => 'Permitir al usuario ver estos valores en su página Ver Recursos asignados',
    'display_in_user_view_table' => 'Visible para el usuario',
];
