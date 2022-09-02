/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package classes;

/**
 *
 * @author aluno
 */
public class Produto {
    
    private int id;
    private String nome;
    private int preco;
    private int numero_vendas;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public int getPreco() {
        return preco;
    }

    public void setPreco(int preco) {
        this.preco = preco;
    }

    public int getNumero_vendas() {
        return numero_vendas;
    }

    public void setNumero_vendas(int numero_vendas) {
        this.numero_vendas = numero_vendas;
    }
    
    
}
