<h1>Saludos {{ $userFullName }},</h1>

<h2>Gracias por reservar en <strong>Il Gusto di Roma</strong>. A continuación 
se le presentan los datos de su última reserva:</h2>

<ul>
    <li><strong>Fecha de la reserva: </strong>{{ $reserva->date }}</li>
    <li><strong>Hora de la reserva: </strong>{{$reserva->time}}</li>
    <li><strong>Mesa asignada: </strong>Mesa {{$table}}</li>
</ul>

<p>
    <strong>¡Le esperamos en nuestro restaurante!</strong>
</p>
