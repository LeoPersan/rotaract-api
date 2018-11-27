<?php

namespace App;

class OMIRBrasil extends \GuzzleHttp\Client
{
	
	public function __construct(array $options = [])
	{
		$options['base_uri'] = 'http://www.omirbrasil.org.br/';
		$options['cookies'] = true;
		parent::__construct($options);
		$this->get('/');
	}

	public function getDistritosInfo()
	{
        $res = $this->request('GET','?include=Sistema_OmirBrasil');
        $html = (string) $res->getBody();
        preg_match_all('/D\.(4[\d]{3}) <\/strong><br \/>\s*(<strong>([^<]*)<\/strong><br \/>\s*)?(<strong>([^<]*)<\/strong><br \/>\s*)?/', $html, $matches);
        foreach ($matches[1] as $key => $distrito) {
            foreach (explode(' / ', $matches[3][$key]) as $item) {
                $distritos[$distrito][] = trim($item);
            }
            if (!empty($matches[5][$key]))
                foreach (explode(' / ', $matches[5][$key]) as $item) {
                    $distritos[$distrito][] = trim($item);
                }
        }
        foreach ($distritos as $distrito => $itens) {
            foreach ($itens as $item) {
                if (preg_match('/@/', $item)) {
                    $distritosInfo[$distrito]['emails'][] = $item;
                } elseif (preg_match('/^\(?[\d]{2}\)? ?[\d]{4,5}-?[\d]{4}$/', $item)) {
                    $distritosInfo[$distrito]['telefones'][] = $item;
                } else {
                    $distritosInfo[$distrito]['sites'][] = $item;
                }
            }
        }
        return $distritosInfo;
	}

	public function getClubes(array $distritos = [])
	{
		if (empty($distritos)) $distritos = array_keys($this->getDistritosInfo());
		foreach ($distritos as $distrito) {
        	$res = $this->request('GET','?include=Sistema_Distrito&id='.$distrito);
        	$html = (string) $res->getBody();
        	preg_match_all('/javascript:AbreFichaClube\(\'([\d]+)\'\)/', $html, $matches);
        	foreach ($matches[1] as $clube) {
        		$res = $this->request('GET','?include=Sistema_Clube&id='.$clube);
	        	$html = (string) $res->getBody();
	        	preg_match_all('/class="Titulo">([\w\s&#;]+)<br \/>/', $html, $matches);
	        	if (isset($matches[1][0])) $clubes[$clube]['nome'] = $matches[1][0];
	        	preg_match_all('/R.C Padrinho: <\/strong>([\w\s&#;]+)<br\/>/', $html, $matches);
	        	if (isset($matches[1][0])) $clubes[$clube]['padrinho'] = $matches[1][0];
	        	preg_match_all('/Nome do Mascote: <\/strong>([\w\s&#;]+)<br\/>/', $html, $matches);
	        	if (isset($matches[1][0])) $clubes[$clube]['mascote'] = $matches[1][0];
	        	preg_match_all('/Data de Funda&#231;&#227;o: <\/strong>([\d\/]+)<br\/>/', $html, $matches);
	        	if (isset($matches[1][0])) $clubes[$clube]['fundacao'] = $matches[1][0];
	        	preg_match_all('/Data de Reconhecimento: <\/strong>([\d\/]+)<br\/>/', $html, $matches);
	        	if (isset($matches[1][0])) $clubes[$clube]['reconhecimento'] = $matches[1][0];
	        	preg_match_all('/Participa de hospedagem familiar: <\/strong>([\w\s&#;]+)<br\/>/', $html, $matches);
	        	if (isset($matches[1][0])) $clubes[$clube]['couchsurfing'] = $matches[1][0];
	        	preg_match_all('/Data de Fechamento: <\/strong>([\d\/]+)<br\/>/', $html, $matches);
	        	if (isset($matches[1][0])) $clubes[$clube]['fechamento'] = $matches[1][0];
	        	preg_match_all('/Telefone<\/td>[^>]+>([^<]+)<\/td>/', $html, $matches);
	        	if (isset($matches[1][0])) $clubes[$clube]['telefone'] = $matches[1][0];
	        	preg_match_all('/Celular<\/td>[^>]+>([^<]+)<\/td>/', $html, $matches);
	        	if (isset($matches[1][0])) $clubes[$clube]['celular'] = $matches[1][0];
	        	preg_match_all('/E-mail<\/td>[^>]+>([^<]+)<\/td>/', $html, $matches);
	        	if (isset($matches[1][0])) $clubes[$clube]['celular'] = $matches[1][0];
	        	preg_match_all('/Facebook<\/td>[^>]+>([^<]+)<\/td>/', $html, $matches);
	        	if (isset($matches[1][0])) $clubes[$clube]['facebook'] = $matches[1][0];
	        	preg_match_all('/Twitter<\/td>[^>]+>([^<]+)<\/td>/', $html, $matches);
	        	if (isset($matches[1][0])) $clubes[$clube]['twitter'] = $matches[1][0];
	        	preg_match_all('/Orkut<\/td>[^>]+>([^<]+)<\/td>/', $html, $matches);
	        	if (isset($matches[1][0])) $clubes[$clube]['orkut'] = $matches[1][0];
	        	preg_match_all('/LinkedIn<\/td>[^>]+>([^<]+)<\/td>/', $html, $matches);
	        	if (isset($matches[1][0])) $clubes[$clube]['linkedin'] = $matches[1][0];
	        	preg_match_all('/MSN<\/td>[^>]+>([^<]+)<\/td>/', $html, $matches);
	        	if (isset($matches[1][0])) $clubes[$clube]['msn'] = $matches[1][0];
	        	preg_match_all('/Site<\/td>[^>]+>([^<]+)<\/td>/', $html, $matches);
	        	if (isset($matches[1][0])) $clubes[$clube]['site'] = $matches[1][0];
        	}
		}
		return $clubes;
	}
}