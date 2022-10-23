/**Classe para objetos do tipo Jogador, onde serão contidos, valores e métodos para o mesmo.
* @author Bola Mundi
* @version 1.05
* @since Release 02 da aplicação
*/

package classes;

public class Jogador {
    
    private int id;
    private String nome;
    private String pais;
    private int numero;
    private String posicao;
    private int idselecao;

    
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

    public String getPais() {
        return pais;
    }

    public void setPais(String pais) {
        this.pais = pais;
    }

    public int getNumero() {
        return numero;
    }

    public void setNumero(int numero) {
        this.numero = numero;
    }

    public String getPosicao() {
        return posicao;
    }

    public void setPosicao(String posicao) {
        this.posicao = posicao;
    }

    public int getIdselecao() {
        return idselecao;
    }

    public void setIdselecao(int idselecao) {
        this.idselecao = idselecao;
    }
    
}
