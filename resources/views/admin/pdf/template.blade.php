<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{$dest->name}}</title>
	<style>
		body { font-family: DejaVu Sans; font-size: 14px; }
		table {border: 1px black solid; border-collapse: collapse; }
		th {border: 1px black solid; border-collapse: collapse;}
		tr {border: 1px black solid; border-collapse: collapse;}
		td {border: 1px black solid; border-collapse: collapse;}
		table.no-border,
		table.no-border > th,
		table.no-border > tbody > tr,
		table.no-border > tbody > tr > td {
			border: none !important;
		}
        table.no-border > tbody > tr > td:nth-child(even) {border-bottom: 1px black solid !important;}
		.border-bottom {
			border-bottom:1px solid black;
		}
	</style>
</head>
<body>
	<div style="height: 90%">
        @if($is_repeat)
        <h2 style="text-align: center">{{__('repeated giving of help')}}</h2>
        @endif
		<h3>Акт приймання-передачі гуманіторної (благодійної) допомоги</h3>
		<div>
			«<span style="width:60px;" class="border-bottom"> {{$date->format('j')}} </span>»
			<span style="width: 100px;" class="border-bottom"> {{$date->format('F')}} </span>
			20<span style="width:40px;" class="border-bottom">{{$date->format('y')}}</span>
			<span> </span>
			м. Одеса
		</div>
		<div>БЛАГОДІНИЙ ФОНД "РАНОК ВІДРОДЖЕННЯ", в собі Голови Правління Погребної Ю. А., з однієї сторони та,</div>
		<table class="no-border">
			<tbody>
				<tr>
					<td>ПІБ:</td>
					<td>{{$dest->name}}</td>
				</tr>
				<tr>
					<td>Контактний Телефон:</td>
					<td>{{$dest->phone}}</td>
				</tr>
				<tr>
					<td>Паспортні данні/права водія:</td>
					<td>{{$dest->passport_id}}</td>
				</tr>
				<tr>
					<td>Місце Проживання:</td>
					<td>{{$dest->address}}</td>
				</tr>

				<tr>
					<td>Кількість осіб <span style="float: right;">всього</span></td>
					<td>{{$dest->family_members_count}}</td>
				</tr>
				<tr>
					<td><span style="float: right;">дорослих</span></td>
					<td>{{$dest->family_members_count - $dest->children_count}}</td>
				</tr>
				<tr>
					<td><span style="float: right;">дітей:</span></td>
					<td>{{$dest->children_count}} {{$dest->children_years}}</td>
				</tr>

			</tbody>
		</table>
        <br/>
		<div>
			Благодійним фондом передано цінності, як гуманітарну допомогу. Цим актом сторони підтверджують факт постави матеріальних цінностей.
		</div>
		<div>
			Цей Акт набув чинності з дати його підписання, уповноваженням обох сторін
		</div>
		<div>
			Матеріальні цінності передані в належному стані. Сторони претензій не мають.
		</div>
		<div>
			Цим актом даю згоду на обробку персональних данних
		</div
        <br/>

		<table style="width:100%; font-size: 12px">
			<thead>
				<th>№</th> <th>Назва матеріальних цінностей</th> <th> Од. Виміру</th> <th>Кількість</th>
			</thead>
			<tbody>
                @php($list_count = count($list))
                @for($i = 0; $i < $min_number_of_rows || $i < $list_count; $i++)
                    <tr><td style="text-align: center">{{$i+1}}</td><td>{{@$list[$i]}}</td><td></td><td></td></tr>
                @endfor
			</tbody>
		</table>
		<br/>
		<div>Матеріальні цінності не подлежать продажу</div>
	</div>
    <div>
        <div style="display:inline-block; float: left">
            <table class="no-border">
                <tr><td colspan="2">Представник від благодійного фонду</td></tr>
                <tr><td>ПІБ</td><td style="border-bottom: 40px solid black;"></td></tr>
                <tr><td>Підпис</td><td style="border-bottom: 1px solid black;"></td></tr>
            </table>
        </div>
        <div style="display:inline-block; float: right">
            <table class="no-border" >
                <tr><td colspan="2">Представник другої сторони</td></tr>
                <tr><td>ПІБ</td><td style="border-bottom: 1px solid black;"></td></tr>
                <tr><td>Підпис</td><td style="border-bottom: 1px solid black;"></td></tr>r
            </table>
        </div>
    </div>
</body>
</html>
