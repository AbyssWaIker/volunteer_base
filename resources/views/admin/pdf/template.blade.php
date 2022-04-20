<!<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body { font-family: DejaVu Sans; font-size: 12px; }
		table {border: 1px black solid; border-collapse: collapse;}
		th {border: 1px black solid; border-collapse: collapse;}
		tr {border: 1px black solid; border-collapse: collapse;}
		td {border: 1px black solid; border-collapse: collapse;}
		table.no-border {border: 0}
		table.no-border > th {border: 0}
		table.no-border > tr {border: 0}
		table.no-border > tr > td {border: 0}
	</style>
</head>
<body>
	<div>
		<h3>Акт приймання-передачі гуманіторної (благодійної) допомоги</h3>
		<div>{{$date}}</div>
		<div>Благодійний фонд "Пліч-о-пліч", в собі Голови Правління, Михайлика Олега Станіславовича, з однієї сторони та,</div>
		<table>
			<thead>
				<tr>
					<th>ПІБ</th> <th>Контактний Телефон</th> <th>Паспортні данні/права водія</th> <th>Місце Проживання</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><b>{{$dest->name}}</td></b> <td>{{$dest->phone}}</td> <td>{{$dest->passport_id}}</td> <td>{{$dest->address}}</td>
				</tr>
				@if($dest->family_members)
					@foreach($dest->family_members as $memb)
						<tr>
							<td>{{@$memb['name']}}</td> <td>{{@$memb['phone']}}</td> <td>{{@$memb['passport_id']}}</td> <td>{{$dest->address}}</td>
						</tr>
					@endforeach
				@endif
			</tbody>
		</table>
		<div>
			Благодійним фондом передано цінності, як гуманітарну допомогу. Цим актом сторони підтверджують факт постави матеріальних цінностей.
		</div>
		<div>
			Цей Акт набув чинності з дати його підписання, уповноваженням обох сторін
		</div>
		<div>
			Матеріальні цінності передані в належному стані. Сторони претензій не мають.
		</div>

		<table>
			<thead>
				<th>№</th> <th>Назва матеріальних цінностей</th> <th> Од. Виміру</th> <th>Кількість</th>
			</thead>
			<tbody>
				{!! str_repeat('<tr>'.str_repeat('<td> &nbsp; </td>', 4).'</tr>', $number_of_rows) !!}
			</tbody>
		</table>
		<br/>
		<div style="display:grid; grid-template-columns: 1tr,1tr,1tr;">
			<div style="display:inline-block">
				<table class="no-border">
					<tr><td colspan="2">Представник від благодійного фонду</td></tr>
					<tr><td>ПІБ</td><td style="border-bottom: 1px solid black;"></td></tr>
					<tr><td>Підпис</td><td style="border-bottom: 1px solid black;"></td></tr>
				</table>
			</div>
			<div style="display:inline-block"></div>
			<div style="display:inline-block">
				<table class="no-border">
					<tr><td colspan="2">Представник другої сторони</td></tr>
					<tr><td>ПІБ</td><td style="border-bottom: 1px solid black;"></td></tr>
					<tr><td>Підпис</td><td style="border-bottom: 1px solid black;"></td></tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>