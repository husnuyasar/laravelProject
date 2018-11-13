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

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'between'              => [
        'numeric' => ':attribute :min ve :max arası olmalı.',
        'file'    => ':attribute :min ve :max kilobyte arası olmalı.',
        'string'  => ':attribute :min ve :max karakter arası olmalı.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'captcha'              => 'Doğrulama kodu eşleşmiyor',
    'confirmed'            => ':attribute eşleşmiyor.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'email'                => ':attribute geçerli değildir.',
    'exists'               => ':attribute doğrulanamadı.',
    'filled'               => 'The :attribute field is required.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'integer'              => ':attribute tamsayı olmalı.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => ':attribute en az :min olmalı.',
        'file'    => ':attribute en az :min kilobyte olmalı.',
        'string'  => ':attribute en az :min karakter olmalı.',
        'array'   => ':attribute en az :min eleman içermeli.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => ':attribute alanı gerekli.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => ':attribute alanı, :values alanı yazılmadığında zorunludur.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => ':attribute must be a valid zone.',
    'unique'               => ':attribute kullanımda.',
    'url'                  => ':attribute formatı geçersiz.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [

      // User ve UserType alan translate'leri
      'name' => 'Ad',
      'email' => 'E-Mail',
      'user_type' => 'Kullanıcı Tipi',
      'company' => 'Şirket',
      'password' => 'Parola',

      //Brand ve BrandModel alan translate'leri
      'brand' => 'Marka',
      'fabrication_year_start' => 'Üret. Tar. Baş.',
      'fabrication_year_end' => 'Üret. Tar. Bit.',

      //Country, Province ve City alan translate'leri
      'country' => 'Ülke',
      'province' => 'İl',

      //Company ve Company Type alan translate'leri
      'fullname' => 'Tam Ad',
      'address' => 'Adres',
      'telephone_number' => 'Telefon',
      'tax_branch' => 'Vergi Dairesi',
      'tax_number' => 'Vergi Numarası',
      'city' => 'İlçe',
      'company_type' => 'Şirket Tipi',

      //Timeline alanı translate'leri
      'icon' => 'Simge',
        
      'ownerreference' => 'Dosya No',
      'plate' => 'Plaka',

    ],
];
