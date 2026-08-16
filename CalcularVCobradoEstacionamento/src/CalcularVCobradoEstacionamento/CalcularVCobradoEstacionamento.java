/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package CalcularVCobradoEstacionamento;

import java.util.Scanner;

/**
 *
 * @author diegoaraujo
 */
public class CalcularVCobradoEstacionamento {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        double totalRecibos = 0.0;

        while (true) {
            System.out.print("\n"+"Digite o número de horas que o cliente ficou estacionado (ou -1 para encerrar): ");
            int horasEstacionado = scanner.nextInt();

            if (horasEstacionado == -1) {
                break;
            }else if (horasEstacionado >=25){
                  System.out.printf("Valor invalido ");
                  break;
            }

            double taxa = calcularTaxa(horasEstacionado);

            System.out.printf("Taxa de estacionamento: R$%.2f\n", taxa);

            totalRecibos += taxa;
        }

        System.out.printf("Total dos recibos: R$%.2f\n", totalRecibos);
    }

    public static double calcularTaxa(int horasEstacionado) {
        double taxa = 0.0;

        if (horasEstacionado <= 3) {
            taxa = 2.0;
        } else if (horasEstacionado <= 24) {
            taxa = 2.0 + 0.5 * (horasEstacionado - 3);
            taxa = Math.min(taxa, 10.0); // Limita a taxa máxima a R$ 10,00
        }

        return taxa;
    }
}