/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package DeterminarCodigoProduto;

import java.util.Scanner;

/**
 *
 * @author diegoaraujo
 */
public class DeterminarCodigoProduto {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        
        System.out.println("Digite o código do produto:");
        int num = input.nextInt();
        switch(num){
            case 1 -> System.out.println("Alimento não-perecível:");
            case 2, 3, 4 -> System.out.println("Alimento perecível");
            case 5, 6 -> System.out.println("Vestuário");
            case 7 ->  System.out.println("Higiene Pessoal");
            case 8, 9, 10, 11, 12, 13, 14, 15 -> System.out.println("Limpeza e Utensílios domésticos");
            default -> System.out.println("Inválido");
           
        }
       
    }
    
}
