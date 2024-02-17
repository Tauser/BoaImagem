
 <x-mail::message>
<h3>Nome: {{ $data['name']}}</h3>
<h3>Whatsapp: {{ $data['whatsapp']}}</h3>
<h3>Nome: {{ $data['message']}}</h3>


<x-mail::button :url="''">
Button Text
</x-mail::button>

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
