<option value="-1" selected>Pilih Kota</option>
@foreach($collect->rajaongkir->results as $city)
    <option value="{{ $city->city_id }},{{ $city->city_name }}">{{ $city->type }} {{ $city->city_name }}</option>
@endforeach