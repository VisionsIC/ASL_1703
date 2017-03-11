@extends ('layouts.master')

@section ('content')

    <h1>Candy List Fail Attempts</h1>

        <div class="input-group">
            <label for="candy-choice">Candy</label>
            <select id="candy-choice" name="candy" required>
                @foreach($candies as $candy)
                    <option>{{$candies->candy_flavor}}</option>
                @endforeach
            </select>
        </div>


@stop