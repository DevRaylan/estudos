package br.edu.ifsc.livros;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication
public class LivroApiApplication {

	public static void main(String[] args) {
		LivroDataSource.criarLista1();
		SpringApplication.run(LivroApiApplication.class, args);
	}

}
