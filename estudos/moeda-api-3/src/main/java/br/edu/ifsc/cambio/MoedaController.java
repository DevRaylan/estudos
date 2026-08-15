package br.edu.ifsc.cambio;

import java.util.ArrayList;
import java.util.List;

import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class MoedaController {

	//localhost:8080/converter_moeda/10000.0/DT/venda
	@RequestMapping(value = "/converter_moeda/{valor}/{tipoMoeda}/{tipoOperacao}", method = RequestMethod.GET)
	public Double converterMoeda(
			@PathVariable(name = "valor") double valor, 
			@PathVariable(name = "tipoMoeda") String tipoMoeda, 
			@PathVariable(name = "tipoOperacao") String tipoOperacao) {
		
		Moeda moeda = MoedaDataSource.get(tipoMoeda);
	double cotacao = 0.0;
		if (moeda != null) {
			if (tipoOperacao.equalsIgnoreCase("Venda")) {
				if (!tipoMoeda.equalsIgnoreCase("OU")) {
					cotacao = valor / moeda.getValorVenda();
				} else {
					cotacao = valor / calcularPrecoVendaOuro(moeda);
				}
				} else {
				cotacao = valor * moeda.getValorCompra();
						}
		}
		
		return cotacao;
	}
	
	//localhost:8080/converter_moeda/10000.0/venda
	@RequestMapping(value = "/converter_moeda/{valor}/{tipoOperacao}")
	public CotacaoTipoMoedaDTO getCotacaoMoedas(
			@PathVariable(name = "valor") double valor, 
			@PathVariable(name = "tipoOperacao") String tipoOperacao) {
		
		CotacaoTipoMoedaDTO moedaDTO = new CotacaoTipoMoedaDTO();
		moedaDTO.setValor(valor);
		moedaDTO.setOperacao(tipoOperacao);
		
		for (Moeda moeda: MoedaDataSource.getAll()) {
			switch (moeda.getSigla()) {
			
			case "DC":
					if (tipoOperacao.equalsIgnoreCase("Venda"))
						moedaDTO.setDc(valor / moeda.getValorVenda());
						else 
							moedaDTO.setDc(valor * moeda.getValorCompra());
					break;
			
				case "DP":
					if (tipoOperacao.equalsIgnoreCase("Venda"))
						moedaDTO.setDp(valor / moeda.getValorVenda());
						else 
							moedaDTO.setDp(valor * moeda.getValorCompra());
					break;
			
				case "DX":
					if (tipoOperacao.equalsIgnoreCase("Venda"))
						moedaDTO.setDx(valor / moeda.getValorVenda());
						else 
							moedaDTO.setDx(valor * moeda.getValorCompra());
					break;
			
				case "DT":
					if (tipoOperacao.equalsIgnoreCase("Venda"))
						moedaDTO.setDt(valor / moeda.getValorVenda());
						else 
							moedaDTO.setDt(valor * moeda.getValorCompra());
					break;
			
				case "EU":
					if (tipoOperacao.equalsIgnoreCase("Venda"))
						moedaDTO.setEu(valor / moeda.getValorVenda());
						else 
							moedaDTO.setEu(valor * moeda.getValorCompra());
					break;
				
				case "OU":	
					if (tipoOperacao.equalsIgnoreCase("Venda"))
						moedaDTO.setOu(valor / calcularPrecoVendaOuro(moeda));
						else 
							moedaDTO.setOu(valor * moeda.getValorCompra());
					break;
			}
		}
		
		return moedaDTO;
	}
	//http://localhost:8080/cotacao_moeda
	@RequestMapping(value = "/cotacao_moeda", method = RequestMethod.GET)
	public List<CotacaoMoedaDTO> getCotacaoMoedas() {
		
		List<CotacaoMoedaDTO> resultado = new ArrayList<>();
		
		for (Moeda moeda: MoedaDataSource.getAll()) {
			CotacaoMoedaDTO moedaDTO = 
				new CotacaoMoedaDTO(moeda.getSigla(), moeda.getValorCompra(), moeda.getValorVenda());
			resultado.add(moedaDTO);
		}
		
		return resultado;
	}
	
	
	
	private double calcularPrecoVendaOuro(Moeda moeda) {
		double precoVendaOuro = moeda.getValorCompra() + 
				(moeda.getValorCompra() * moeda.getValorVenda() / 100);
		return precoVendaOuro;
	}
	
	
	
}