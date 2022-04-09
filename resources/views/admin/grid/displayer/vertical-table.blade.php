<table class="table table-hover" style="margin-bottom: 0;">
    <tbody>
    @foreach($data as $column => $datum)
    <tr>

        <td><b>{{ @$titles[$column] }}</b></td>
        @foreach($datum as $key => $value)
            <td>{!!  $value !!}</td>
        @endforeach
    </tr>
    @endforeach
    </tbody>
</table>
