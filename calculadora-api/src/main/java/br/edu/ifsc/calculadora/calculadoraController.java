package br.edu.ifsc.calculadora;

import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class calculadoraController {


	@RequestMapping(value = "/somar/{valor1}/{valor2}", method = RequestMethod.GET)
	public  Double somar(
			@PathVariable("valor1")double valor1,
			@PathVariable("valor2")double valor2) {
		return valor1+valor2;
	}
	
	@RequestMapping(value = "/subtrair/{op1}/{op2}", method = RequestMethod.GET)
	public  Double subtrair(
			@PathVariable("op1")double op1,
			@PathVariable("op2")double op2) {

		return op1-op2;
	}
	@RequestMapping(value = "/multiplicar/{op1}/{op2}", method = RequestMethod.GET)
	public  Double multiplicar(
			@PathVariable("op1")double op1,
			@PathVariable("op2")double op2) {

		return op1*op2;
	}
	@RequestMapping(value = "/divisao/{op1}/{op2}", method = RequestMethod.GET)
	public  Double divisao(
			@PathVariable("op1")double op1,
			@PathVariable("op2")double op2) {

		return op1/op2;
	}
}
