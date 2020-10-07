<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El :attribute debe ser aceptado.',
    'active_url' => 'El :attribute np es una URL válida.',
    'after' => 'EL :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El :attribute solo debe contener letras.',
    'alpha_dash' => 'El :attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El :attribute solo puede contener letras y números.',
    'array' => 'El :attribute debe ser una matriz.',
    'before' => 'El :attribute debe ser una fecha anterior a la fecha.',
    'before_or_equal' => 'El :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file' => 'El :attribute debe estar entre :min y :max kilobytes.',
        'string' => 'El :attribute debe estar entre :min y :max de caracteres.',
        'array' => 'El :attribute debe tener entre :min y :max elementos.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'La confirmación de :attribute no coincide.',
    'date' => 'El :attribute no es una fecha válida.',
    'date_equals' => 'El :attribute debe ser una fecha igual a :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'El :attribute y :other deben ser diferentes.',
    'digits' => 'El :attribute debe ser :digits dígitos.',
    'digits_between' => 'El :attribute debe estar entre :min y :max de dígtos.',
    'dimensions' => 'El :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'email' => 'El :attribute debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El :attribute debe terminar con uno de los siguientes valores: :values',
    'exists' => 'El :attribute seleccionado no es válido.',
    'file' => 'El :attribute debe ser un archivo.',
    'filled' => 'El campo del :attribute debe tener un valor.',
    'gt' => [
        'numeric' => 'El :attribute debe ser mayor que :value.',
        'file' => 'El :attribute debe ser mayor que :value kilobytes.',
        'string' => 'El :attribute debe ser mayor que los caraceres de :value.',
        'array' => 'El :attribute debe tener más de :value elementos.',
    ],
    'gte' => [
        'numeric' => 'El :attribute debe ser mayor o igual que :value.',
        'file' => 'El :attribute debe ser mayor o igual que :value kilobytes.',
        'string' => 'El :attribute debe ser mayor o igual que los caracteres de :value.',
        'array' => 'El :attribute debe tener :value elementos o más.',
    ],
    'image' => 'El :attribute debe ser una imagen.',
    'in' => 'El :attribute seleccionado no es válido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => 'El :attribute debe ser un número entero.',
    'ip' => 'El :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El :attribute debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => 'El :attribute debe ser menor que :value.',
        'file' => 'El :attribute debe ser menor que :value kilobytes.',
        'string' => 'El :attribute debe ser menor que :value caracteres.',
        'array' => 'El :attribute debe ser menor que :value elementos.',
    ],
    'lte' => [
        'numeric' => 'El :attribute debe ser menor o igual que :value.',
        'file' => 'El :attribute debe ser menor o igual que :value kilobytes.',
        'string' => 'El :attribute debe ser menor o igual que :value caracteres.',
        'array' => 'El :attribute debe ser menor o igual que :value elementos.',
    ],
    'max' => [
        'numeric' => 'El :attribute no puede ser mayor que :max.',
        'file' => 'El :attribute no puede ser mayor que :max kilobytes.',
        'string' => 'El :attribute no puede ser mayor que :max caracteres.',
        'array' => 'El :attribute no puede ser mayor que :max elementos.',
    ],
    'mimes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => 'El :attribute debe ser al menos :min.',
        'file' => 'El :attribute debe ser al menos :min kilobytes.',
        'string' => 'El :attribute debe ser al menos :min caracteres.',
        'array' => 'El :attribute debe ser al menos :min elementos.',
    ],
    'not_in' => 'El :attribute seleccionado no es válido.',
    'not_regex' => 'El formato de :attribute no es válido.',
    'numeric' => 'El :attribute debe ser un número.',
    'present' => 'El campo :attribute debe estar presente.',
    'regex' => 'El formato de :attribute no es válido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_if' => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que :other es en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :values están presentes.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de :values estan presente.',
    'same' => 'El :attribute y :other deben coincid.',
    'size' => [
        'numeric' => 'El :attribute debe ser :size.',
        'file' => 'El :attribute debe ser :size de kilobytes.',
        'string' => 'El :attribute debe ser caracteres de :size.',
        'array' => 'El :attribute debe contener elementos de :size.',        
    ],
    'starts_with' => 'El :attribute debe comenzar con uno de los siguientes: :values',
    'string' => 'El :attribute debe ser una cadena.',
    'timezone' => 'El :attribute debe ser una zona válida.',
    'unique' => 'El :attribute ya se a registrado.',
    'uploaded' => 'El :attribute no se pudo cargar.',
    'url' => 'El :attribute no tiene formato válido.',
    'uuid' => 'El :attribute debe ser un UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
    'return_details' => 'detalles de devolución',
    'return_quantity' => 'cantidad de devolución',
    'income_products' => 'Ingreso de productos',
    'add' => 'Agregar',
    'due_date' => 'Fecha de vencimiento',
    'total' => 'Total',
    'remove' => 'Quitar',
    'details' => 'Detalles',
    'fast_income' => 'Ingresos rápidos',
    'stock' => 'Stock',
    'stock_incomes' => 'Ingresos a stock',
    'status' => 'Estados',
    'state' => 'Estado',
    'total_value' => 'Valor total',
    'total_price' => 'Precio total',
    'unit_price' => 'Precio unitario',
    'price' => 'Precio',
    'quantity' => 'Cantidad',
    'product_list_voucher' => 'Productos en comprobante',
    'voucher_total_value' => 'Valor total en comprobante',
    'select' => 'Seleccionar',
    'attach_file' => 'Adjuntar archivo',
    'purchase_date' => 'Fecha de compra',
    'voucher_type' => 'Tipo de comprobante',
    'voucher_number' => 'Número de comprobante',
    'tax' => 'Impuesto',
    'type' => 'Tipo',
    'serie' => 'Serie',
    'save_income' => 'Guardar ingreso',
    'voucher' => 'Comprobante',
    'vouchers' => 'Comprobantes',
    'incomes' => 'Ingresos',
    'income' => 'Ingreso',
    'product_incomes' => 'Ingreso de productos',
    'brands' => 'Marcas',
    'presentations' => 'Presentaciones',
    'edit-category' => 'Editar categoria',
    'account' => 'Mi cuenta',
    'welcome' => 'Bienvenid@!',
    'user_name' => 'Nombre de usuario /Correo electrónico',
    'email_address' => 'Correo electrónico',
    'password' => 'Contraseña',
    'remember_me' => 'Recordarme',
    'forgot_your_password' => '¿Olvidó su contraseña?',
    'confirm_password' => 'Confirmar contraseña',
    'register' => 'Registrar',
    'help_desk' => 'Soporte técnico',
    'about_us' => 'Sobre nosotros',
    'blog' => 'Blog',
    'name' => 'Nombre',
    'description' => 'Descripción',
    'created_at' => 'Creado',
    'initial_amount' => 'Cantidad inicial',
    'current_amount' => 'Cantidad actual',
    'updated_at' => 'Actualizado',
    'edit' => 'Editar',
    'delete' => 'Eliminar',
    'action' => 'Acción',
    'lastname' => 'Apellido',
    'login' => 'Iniciar sesión',
    'registers' => 'Registros',
    'store' => 'Tienda',
    'presentation' => 'Presentación',
    'image' => 'Imagen',
    'price' => 'Precio',
    'list_price' => 'Precio de lista',
    'wholesale_price' => 'Precio mayorista',
    'retail_price' => 'Precio minorista',
    'help_product' => '<ul>
    <li>
    <b>Presentación:</b> La forma que se encunetra el producto ej: En caja...
    </li>
    <li>
    <b>Imagen:</b> Imagen elegante para su presentación
    </li>
    <li>
    <b>Precio:</b> Utilizar números decimales separados ej: 00,00
    </li>
    <li>
    <b>Cantidad:</b> Si la unidad de venta es por Kg: escribir con decimales ej: 00,00
    </li>
    </ul>',
    'initial_quantity' => 'Cantidad inicial',
    'quantity' => 'Cantidad',
    'category' => 'Categoria',
    'categories' => 'Categorias',
    'new_category' => 'Nueva categoria',
    'product' => 'Producto',
    'products' => 'Productos',
    'new_product' => 'Nuevo producto',
    'new_brand' => 'Nueva marca',
    'brand' => 'Marca',
    'income_expenses' => 'Ingresos /Egresos',
    'order' => 'Orden',
    'orders' => 'Ordenes',
    'sale' => 'Venta',
    'sales' => 'Ventas',
    'user' => 'Usuario',
    'users' => 'Usuarios',
    'system_users' => 'Usuarios de sistema',
    'moves' => 'Movimientos',
    'client' => 'Cliente',
    'clients' => 'Clientes',
    'providers' => 'Proveedores',
    'provider' => 'Proveedor',
    'invoice' => 'Factura',
    'invoices' => 'Facturas',
    'check_in' => 'Facturar',
    'discount' => 'Descuento',
    'notifications' => 'Notificaciones',
    'profile_settings' => 'Configuración de perfil',
    'logout' => 'Desconectarme',        
    ],

];
