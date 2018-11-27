<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>API RAC Brasil</title>
</head>
<body>
<pre>
<b>GET /regioes</b>
	Exemplo
	GET /regioes
	RETORNO:
	[
		{
			"regiao": "I"
		},
		{
			"regiao": "II"
		},
		{
			"regiao": "III"
		}
	]

<b>GET /regioes/{nº regiao}</b>
	Exemplo
	GET /regioes/i
	{
		"regiao": "I"
	}

<b>GET /regioes/{nº regiao}/distritos</b>
	Exemplo
	GET /regioes/i/distritos
	[
		{
			"distrito": 4510
		},
		{
			"distrito": 4500
		},
		{
			"distrito": 4310
		}
	]

<b>GET /estados</b>
	Exemplo
	GET /estados
	RETORNO:
	[
		{
			"estado": "São Paulo",
			"uf": "SP"
		},
		{
			"estado": "Rio de Janeiro",
			"uf": "RJ"
		},
		{
			"estado": "Minas Gerais",
			"uf": "MG"
		}
	]

<b>GET /estados/{estado}</b>
	Exemplo
	GET /estados/sp
	{
			"estado": "São Paulo",
			"uf": "SP"
	}

<b>GET /estados/{estado}/distritos</b>
	Exemplo
	GET /estados/sp/distritos
	[
		{
			"distrito":4510
		},
		{
			"distrito":4500
		},
		{
			"distrito":4310
		}
	]

<b>GET /distritos</b>
	Exemplo
	GET /distritos
	RETORNO:
	[
		{
			"distrito":4510
		},
		{
			"distrito":4500
		},
		{
			"distrito":4310
		}
	]

<b>GET /distritos/{nº distrito}</b>
	Exemplo
	GET /distritos/4510
	{
		"distrito": 4510
	}

<b>GET /distritos/{nº distrito}/estados</b>
	Exemplo
	GET /distritos/4510/estados
	[
		{
			"estado": "São Paulo",
			"uf": "SP"
		}
	]

<b>GET /distritos/{nº distrito}/clubes</b>
	Exemplo
	GET /distritos/4510/clubes
	[
		{
			"clube": "Rotaract Club de Tupi Paulista"
		},
		{
			"clube": "Rotaract Club de Dracena"
		},
		{
			"clube": "Rotaract Club de Panorama"
		}
	]

<b>GET /clubes</b>
	Exemplo
	GET /clubes
	RETORNO:
	[
		{
			"clube": "Rotaract Club de Tupi Paulista"
		},
		{
			"clube": "Rotaract Club de Dracena"
		},
		{
			"clube": "Rotaract Club de Panorama"
		}
	]

<b>GET /clubes/{nome_clube}</b>
	Exemplo
	GET /clubes/tupi_paulista
	{
			"clube": "Rotaract Club de Tupi Paulista"
	}
</pre>
</body>
</html>