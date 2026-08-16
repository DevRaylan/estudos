/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package CalcularDadosdeCirculo;

import java.util.Scanner;

/**
 *
 * @author diegoaraujo
 */
public class CalcularDadosdeCirculo {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // entrada
        Scanner entrada = new Scanner(System.in);
        System.out.print("Defina o raio de círculo: ");
        double R = Float.parseFloat(entrada.nextLine());
        double diametro = 0;
	double circunferencia = 0;
	double area = 0; 
        
         //Processamento
        diametro=2*R;
        circunferencia= Math.pow(Math.PI, 2)*R;
        area= Math.pow(R, 2)*Math.PI;
  
         // Saida
         System.out.printf("Diametro é: " + diametro + "\n" + "circunferencia é: " + circunferencia + "\n"+"area é: " + area);
  
    }
    
}
