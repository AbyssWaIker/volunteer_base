<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body { font-family: DejaVu Sans; font-size: 14px; }
		table {border: 1px black solid; border-collapse: collapse; }
		th {border: 1px black solid; border-collapse: collapse;}
		tr {border: 1px black solid; border-collapse: collapse;}
		td {border: 1px black solid; border-collapse: collapse;}
		table.no-border, 
		table.no-border > th, 
		table.no-border > tr, 
		table.no-border > tr > td {
			border: none;
			color: darkgreen;
		}
		table.no-border > tr > td: even {border-bottom: 1px black solid;}
	</style>
</head>
<body>
	<div style="height: 90%">
		<h3>Акт приймання-передачі гуманіторної (благодійної) допомоги</h3>
		<div>{{$date}}</div>
		<div>Благодійний фонд "Пліч-о-пліч", в собі Голови Правління, Михайлика Олега Станіславовича, з однієї сторони та,</div>
		<table class="no-border">
			<tbody>
				<tr>
					<td>ПІБ</td>
					<td>{{$dest->name}}</td>
				</tr>
				<tr>
					<td>Контактний Телефон</td>
					<td>{{$dest->phone}}</td> 
				</tr>
				<tr>
					<td>Паспортні данні/права водія</td>
					<td>{{$dest->passport_id}}</td>
				</tr>
				<tr>
					<td>Місце Проживання</td>
					<td>{{$dest->address}}</td>
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
        <br/>

		<table style="width:100%; font-size: 12px">
			<thead>
				<th>№</th> <th>Назва матеріальних цінностей</th> <th> Од. Виміру</th> <th>Кількість</th>
			</thead>
			<tbody>
                @for($i = 1; $i <= $number_of_rows; $i++)
                    <tr><td style="text-align: center">{{$i}}</td><td></td><td></td><td></td></tr>
                @endfor
			</tbody>
		</table>
		<br/>
	</div>
    <div>
        <div style="display:inline-block; float: left">
            <table class="no-border">
                <tr><td colspan="2">Представник від благодійного фонду</td></tr>
                <tr><td>ПІБ</td><td style="border-bottom: 1px solid black;"></td></tr>
                <tr><td>Підпис</td><td style="border-bottom: 1px solid black;"></td></tr>
            </table>
        </div>
        <div style="display:inline-block; float: right">
            <table class="no-border">
                <tr><td colspan="2">Представник другої сторони</td></tr>
                <tr><td>ПІБ</td><td style="border-bottom: 1px solid black;"></td></tr>
                <tr><td>Підпис</td><td style="border-bottom: 1px solid black;"></td></tr>
            </table>
        </div>
    </div>
</body>
</html>
