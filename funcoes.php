<?php

function traduzirDia($diaIngles){
    $dias = [
        'Sun' => 'Dom',
        'Mon' => 'Seg',
        'Tue' => 'Ter',
        'Wed' => 'Qua',
        'Thu' => 'Qui',
        'Fri' => 'Sex',
        'Sat' => 'Sáb'
    ];
    return $dias[$diaIngles] ?? $diaIngles;
}

function pegarDiasSemana(){
	$diasSemana = [];
	$hoje = new Datetime();

    $numeroDia = $hoje->format('w');

	$inicioSemana = clone $hoje;
	$inicioSemana->modify("-{$numeroDia} days");

	for ($i = 0; $i < 7; $i++){
		$dia = clone $inicioSemana;
		$dia->add(new DateInterval("P{$i}D"));

		$diasSemana[] = [
			'date' => $dia->format('Y-m-d'),
			'label' => traduzirDia($dia->format('D')) . ', ' . $dia->format('d/m'),
			'is_today' => $dia->format('Y-m-d') === $hoje->format('Y-m-d')
		];
	}
	return $diasSemana;
}
