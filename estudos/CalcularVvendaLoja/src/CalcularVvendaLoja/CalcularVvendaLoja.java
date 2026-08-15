/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package CalcularVvendaLoja;

import java.util.Scanner;

/**
 *
 * @author diegoaraujo
 */
public class CalcularVvendaLoja {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Digite o total gasto pelo cliente: ");
        double totalGasto = scanner.nextDouble();

        int opcao = mostrarMenu(scanner);

        switch (opcao) {
            case 1 -> calcularAVistaComDesconto(totalGasto);
            case 2 -> calcularEmDuasVezes(totalGasto);
            case 3 -> calcularParcelado(totalGasto, scanner);
            default -> System.out.println("Opção inválida.");
        }
    }

    public static int mostrarMenu(Scanner scanner) {
        System.out.println("Escolha uma opção de pagamento:");
        System.out.println("1. A vista com 10% de desconto");
        System.out.println("2. Em duas vezes (preço da etiqueta)");
        System.out.println("3. De 3 até 10 vezes com 3% de juros ao mês (somente para compras acima de R$100,00)");
        System.out.print("Opção escolhida: ");
        int opcao = scanner.nextInt();
        return opcao;
    }

    public static void calcularAVistaComDesconto(double totalGasto) {
        double valorComDesconto = totalGasto * 0.9;
        System.out.printf("Valor total com desconto: R$%.2f\n", valorComDesconto);
    }

    public static void calcularEmDuasVezes(double totalGasto) {
        double valorParcela = totalGasto / 2;
        System.out.printf("Valor total em duas vezes: R$%.2f\n", totalGasto);
        System.out.printf("Valor de cada parcela: R$%.2f\n", valorParcela);
    }

    public static void calcularParcelado(double totalGasto, Scanner scanner) {
        if (totalGasto < 100) {
            System.out.println("Esta opção de pagamento só é válida para compras acima de R$100,00.");
            return;
        }

        System.out.print("Digite o número de parcelas (de 3 a 10): ");
        int numeroParcelas = scanner.nextInt();
        if (numeroParcelas < 3 || numeroParcelas > 10) {
            System.out.println("Número de parcelas inválido.");
            return;
        }

        double valorComJuros = totalGasto * Math.pow(1.03, numeroParcelas);
        double valorParcela = valorComJuros / numeroParcelas;

        System.out.printf("Valor total parcelado em %d vezes: R$%.2f\n", numeroParcelas, valorComJuros);
        System.out.printf("Valor de cada parcela: R$%.2f\n", valorParcela);
    }
}
