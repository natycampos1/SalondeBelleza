<?php
return [
 /*
 |-------------------------------
------------------------------------
-------
 | Validation Language Lines
|-------------------------------
------------------------------------
-------
 |
 | The following language lines c
ontain the default error messages us
ed by
 | the validator class. Some of t
hese rules have multiple versions su
ch
 | as the size rules. Feel free t
o tweak each of these messages here.
 |
 */
 'accepted' => 'El ca
mpo :attribute debe ser aceptado.',
 'active_url' => 'El ca
mpo :attribute no es una URL válida.
',
 'after' => 'El ca
mpo :attribute debe ser una fecha po
sterior a :date.',
 'after_or_equal' => 'El ca
mpo :attribute debe ser una fecha po
sterior o igual a :date.',
 'alpha' => 'El ca
mpo :attribute solo puede contener l
etras.',
 'alpha_dash' => 'El ca
mpo :attribute solo puede contener l
etras, números, guiones y guiones ba
jos.',
 'alpha_num' => 'El ca
mpo :attribute solo puede contener l
etras y números.',
 'array' => 'El ca
mpo :attribute debe ser un array.',
 'before' => 'El ca
mpo :attribute debe ser una fecha an
terior a :date.',
 'before_or_equal' => 'El ca
mpo :attribute debe ser una fecha an
terior o igual a :date.',
 'between' => [
    'numeric' => 'El campo :attr
ibute debe ser un valor entre :min y
:max.',
 'file' => 'El archivo :at
tribute debe pesar entre :min y :max
kilobytes.',
 'string' => 'El campo :attr
ibute debe contener entre :min y :ma
x caracteres.',
 'array' => 'El campo :attr
ibute debe contener entre :min y :ma
x elementos.',
 ],
 'boolean' => 'El ca
mpo :attribute debe ser verdadero o
falso.',
 'confirmed' => 'El ca
mpo confirmación de :attribute no co
incide.',
 'date' => 'El ca
mpo :attribute no corresponde con un
a fecha válida.',
 'date_equals' => 'El ca
mpo :attribute debe ser una fecha ig
ual a :date.',
 'date_format' => 'El ca
mpo :attribute no corresponde con el
formato de fecha :format.',
 'different' => 'Los c
ampos :attribute y :other deben ser
diferentes.',
 'digits' => 'El ca
mpo :attribute debe ser un número de
:digits dígitos.',
 'digits_between' => 'El ca
mpo :attribute debe contener entre :
min y :max dígitos.',
 'dimensions' => 'El ca
mpo :attribute tiene dimensiones de
imagen inválidas.',
 'distinct' => 'El ca
mpo :attribute tiene un valor duplic
ado.','email' => 'El ca
mpo :attribute debe ser una direcció
n de correo válida.',
 'ends_with' => 'El ca
mpo :attribute debe finalizar con al
guno de los siguientes valores: :val
ues',
 'exists' => 'El ca
mpo :attribute seleccionado no exist
e.',
 'file' => 'El ca
mpo :attribute debe ser un archivo.'
,
 'filled' => 'El ca
mpo :attribute debe tener un valor.'
,
 'gt' => [
 'numeric' => 'El campo :attr
ibute debe ser mayor a :value.',
 'file' => 'El archivo :at
tribute debe pesar más de :value kil
obytes.',
 'string' => 'El campo :attr
ibute debe contener más de :value ca
racteres.',
 'array' => 'El campo :attr
ibute debe contener más de :value el
ementos.',
 ],
 'gte' => [
 'numeric' => 'El campo :attr
ibute debe ser mayor o igual a :valu
e.',
 'file' => 'El archivo :at
tribute debe pesar :value o más kilo
bytes.',
 'string' => 'El campo :attr
ibute debe contener :value o más car
acteres.',
 'array' => 'El campo :attr
ibute debe contener :value o más ele
mentos.',
 ],'image' => 'El ca
mpo :attribute debe ser una imagen.'
,
 'in' => 'El ca
mpo :attribute es inválido.',
 'in_array' => 'El ca
mpo :attribute no existe en :other.'
,
 'integer' => 'El ca
mpo :attribute debe ser un número en
tero.',
 'ip' => 'El ca
mpo :attribute debe ser una direcció
n IP válida.',
 'ipv4' => 'El ca
mpo :attribute debe ser una direcció
n IPv4 válida.',
 'ipv6' => 'El ca
mpo :attribute debe ser una direcció
n IPv6 válida.',
 'json' => 'El ca
mpo :attribute debe ser una cadena d
e texto JSON válida.',
 'lt' => [
 'numeric' => 'El campo :attr
ibute debe ser menor a :value.',
 'file' => 'El archivo :at
tribute debe pesar menos de :value k
ilobytes.',
 'string' => 'El campo :attr
ibute debe contener menos de :value
caracteres.',
 'array' => 'El campo :attr
ibute debe contener menos de :value
elementos.',
 ],
 'lte' => [
 'numeric' => 'El campo :attr
ibute debe ser menor o igual a :valu
e.',
 'file' => 'El archivo :at
tribute debe pesar :value o menos ki
lobytes.','string' => 'El campo :attr
ibute debe contener :value o menos c
aracteres.',
 'array' => 'El campo :attr
ibute debe contener :value o menos e
lementos.',
 ],
 'max' => [
 'numeric' => 'El campo :attr
ibute no debe ser mayor a :max.',
 'file' => 'El archivo :at
tribute no debe pesar más de :max ki
lobytes.',
 'string' => 'El campo :attr
ibute no debe contener más de :max c
aracteres.',
 'array' => 'El campo :attr
ibute no debe contener más de :max e
lementos.',
 ],
 'mimes' => 'El ca
mpo :attribute debe ser un archivo d
e tipo: :values.',
 'mimetypes' => 'El ca
mpo :attribute debe ser un archivo d
e tipo: :values.',
 'min' => [
 'numeric' => 'El campo :attr
ibute debe ser al menos :min.',
 'file' => 'El archivo :at
tribute debe pesar al menos :min kil
obytes.',
 'string' => 'El campo :attr
ibute debe contener al menos :min ca
racteres.',
 'array' => 'El campo :attr
ibute debe contener al menos :min el
ementos.',
 ],
 'not_in' => 'El ca
mpo :attribute seleccionado es invál
ido.',
 'not_regex' => 'El fo
rmato del campo :attribute es inváli
do.', 'numeric' => 'El ca
mpo :attribute debe ser un número.',
 'password' => 'La co
ntraseña es incorrecta.',
 'present' => 'El ca
mpo :attribute debe estar presente.'
,
 'regex' => 'El fo
rmato del campo :attribute es inváli
do.',
 'required' => 'El ca
mpo :attribute es obligatorio.',
 'required_if' => 'El ca
mpo :attribute es obligatorio cuando
el campo :other es :value.',
 'required_unless' => 'El ca
mpo :attribute es requerido a menos
que :other se encuentre en :values.'
,
 'required_with' => 'El ca
mpo :attribute es obligatorio cuando
:values está presente.',
 'required_with_all' => 'El ca
mpo :attribute es obligatorio cuando
:values están presentes.',
 'required_without' => 'El ca
mpo :attribute es obligatorio cuando
:values no está presente.',
 'required_without_all' => 'El ca
mpo :attribute es obligatorio cuando
ninguno de los campos :values están
presentes.',
 'same' => 'Los c
ampos :attribute y :other deben coin
cidir.',
 'size' => [
 'numeric' => 'El campo :attr
ibute debe ser :size.',
 'file' => 'El archivo :at
tribute debe pesar :size kilobytes.'
,
 'string' => 'El campo :attr
ibute debe contener :size caracteres
.', 'array' => 'El campo :attr
ibute debe contener :size elementos.
',
 ],
 'starts_with' => 'El ca
mpo :attribute debe comenzar con uno
de los siguientes valores: :values'
,
 'string' => 'El ca
mpo :attribute debe ser una cadena d
e caracteres.',
 'timezone' => 'El ca
mpo :attribute debe ser una zona hor
aria válida.',
 'unique' => 'El va
lor del campo :attribute ya está en
uso.',
 'uploaded' => 'El ca
mpo :attribute no se pudo subir.',
 'url' => 'El fo
rmato del campo :attribute es inváli
do.',
 'uuid' => 'El ca
mpo :attribute debe ser un UUID váli
do.',
 /*
 |-------------------------------
------------------------------------
-------
 | Custom Validation Language Lin
es
 |-------------------------------
------------------------------------
-------
 |
 | Here you may specify custom va
lidation messages for attributes usi
ng the
 | convention "attribute.rule" to
name the lines. This makes it quick
to
 | specify a specific custom lang
uage line for a given attribute rule
. |
 */
 'custom' => [
 'attribute-name' => [
 'rule-name' => 'custommessage',
 ],
 ],
 /*
 |-------------------------------
------------------------------------
-------
 | Custom Validation Attributes
 |-------------------------------
------------------------------------
-------
 |
 | The following language lines a
re used to swap attribute placeholders
 | with something more reader fri
endly such as E-Mail Address instead
 | of "email". This simply helps
us make messages a little cleaner.
 |
 */
 'attributes' => [],
];
