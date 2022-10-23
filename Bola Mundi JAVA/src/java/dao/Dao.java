package dao;

import classes.Usuario;
import classes.Jogador;
import classes.Produto;
import classes.Comentario;
import static dao.Dao.getConnection;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.List;
 import java.util.Date;
import java.util.GregorianCalendar;

public class Dao {

    public static Connection getConnection(){
    Connection con = null;
    try{
        Class.forName("com.mysql.jdbc.Driver");       
        con=DriverManager.getConnection("jdbc:mysql://localhost:3306/id19270301_id18524654_loginbolamundi","root","");
    }catch(Exception erro){
        System.out.println(erro);
    }
        return con;
    
    }
    
 /**Método para puxar o usuário pelo id dele
 * @author Bola Mundi
 * @param id int - Id do usuário
 * @return Objeto - Classe usuário
 */
    
    public static Usuario getUsuarioById(int id){
        Usuario usuario = null;      
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("select * from usuarios where Id=?");
        ps.setInt(1, id);
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
            usuario = new Usuario();
            usuario.setId(rs.getInt("id"));
            usuario.setNome(rs.getString("nome"));
            usuario.setEmail(rs.getString("email"));         
            usuario.setSenha(rs.getString("senha"));   
            usuario.setAcesso(rs.getString("acesso")); 
        }
    }catch(Exception erro){
        System.out.println(erro);
    }      
        return usuario;
    }
    
 /**Método para criar uma lista de usuários
 * @author Bola Mundi
 * @return list de objetos da classe usuário
 */ 
    
     public static List<Usuario> getRelatorio() {
	    List<Usuario> list = new ArrayList<Usuario>();
	    try{
	        Connection con = getConnection();
	        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT * FROM usuarios");
	        ResultSet rs = ps.executeQuery();
	        while(rs.next()){
	            Usuario usuario = new Usuario();
	            usuario.setId(rs.getInt("id"));
	            usuario.setNome(rs.getString("nome"));
	            usuario.setEmail(rs.getString("email"));          
	            usuario.setAcesso(rs.getString("acesso")); 
	            list.add(usuario);
	        }       
	    }catch(Exception erro){
	        System.out.println(erro);
	    }
	    return list;
	    }
     
 /**Método para editar os dados do usuário
 * @author Bola Mundi
 * @param Objeto da classe usuário
 * @return boolean - status
 */   
    
   public static int editarUsuario(Usuario usuario){
       int status = 0;  
   try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("UPDATE usuarios SET Nome=?, Email=?, Acesso=? WHERE id=?");
        ps.setString(1, usuario.getNome());
        ps.setString(2, usuario.getEmail());
        ps.setString(3, usuario.getAcesso()); 
        ps.setInt(4, usuario.getId());         
        status = ps.executeUpdate();
    }catch(Exception erro){
        System.out.println(erro);
    }      
       return status;
   }
   
 /**Método para criar uma lista dos usuários de acordo com a paginação pré-definida
 * @author Bola Mundi
 * @param inicio - int início da paginação
 * @param total - int total de linhas para aparecer na tabela por página
 * @return list de objetos da classe usuário
 */   
    
    public static List<Usuario> getUsuarios(int inicio, int total) {
    List<Usuario> list = new ArrayList<Usuario>();
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT * FROM usuarios ORDER BY id LIMIT " + (inicio - 1) + " ," + total);
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
            Usuario usuario = new Usuario();
            usuario.setId(rs.getInt("id"));
            usuario.setNome(rs.getString("nome"));
            usuario.setEmail(rs.getString("email"));         
            usuario.setSenha(rs.getString("senha"));   
            usuario.setAcesso(rs.getString("acesso")); 
            list.add(usuario);
        }
    }catch(Exception erro){
        System.out.println(erro);
    }
    return list;
    }
    
 /**Método para excluir os dados do usuário
 * @author Bola Mundi
 * @param Objeto da classe usuário
 * @return boolean - status
 */
    
    public static int excluirUsuario(Usuario usuario){
       int status = 0;  
   try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("DELETE FROM usuarios WHERE id=?");
        ps.setInt(1, usuario.getId());         
        status = ps.executeUpdate();
    }catch(Exception erro){
        System.out.println(erro);
    }      
       return status;
   }
    
 /**Método para cadastrar o usuário
 * @author Bola Mundi
 * @param Objeto da classe usuário
 * @return boolean - status
 */    
    
   public static int cadastrarUsuario(Usuario usuario){
       int status = 0;  
   try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("INSERT INTO USUARIOS(NOME,EMAIL,SENHA,ACESSO) VALUES(?,?,?,?)");
        ps.setString(1, usuario.getNome());
        ps.setString(2, usuario.getEmail());
        ps.setString(3, usuario.getSenha());        
        ps.setString(4, usuario.getAcesso());          
        status = ps.executeUpdate();
    }catch(Exception erro){
        System.out.println(erro);
    }      
       return status;
   }
   
 /**Método para bloquear o usuário
 * @author Bola Mundi
 * @param Objeto da classe usuário
 * @return boolean - status
 */   
   
   
     public static int bloquearUsuario(Usuario usuario){
       int status = 0;  
       String statusdousuario;
       
       if(usuario.getStatus().equals("Ativo")){
        statusdousuario = "Bloqueado";    
       }else{
        statusdousuario = "Ativo";   
       }
        try{
             Connection con = getConnection();
             PreparedStatement ps = (PreparedStatement) con.prepareStatement("UPDATE usuarios SET Status=? WHERE id=?");
             ps.setString(1, statusdousuario);
             ps.setInt(2, usuario.getId());         
             status = ps.executeUpdate();
         }catch(Exception erro){
             System.out.println(erro);
         }      
            return status;
   } 


   
 /**Método para cadastrar os comentários
 * @author Bola Mundi
 * @param Objeto da classe comentario
 * @return boolean - status
 */
   
    public static int cadastrarComentario(Comentario comentario){
    int status = 0;  
    //tem que fazer sistema de login para usar a classe usuario aqui
    try{
    Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("INSERT INTO comentarios(Comentario,Nome,Data,Id_usuario) VALUES(?,?,?,?)");

        //mudar para o atributo comentário para texto no db
        
       ps.setString(1, comentario.getTexto());
        ps.setString(2, "Usuário");
      ps.setString(3,"0000-00-00");  
        ps.setInt(4, 3);
                  
        status = ps.executeUpdate();
   
    }catch(Exception erro){
        System.out.println( erro);
    }
    
    return status;
    }
    
 /**Método para criar uma lista de comentários
 * @author Bola Mundi
 * @return list de objetos da classe comentario
 */     
    
    public static List<Comentario> getComentario() {
    List<Comentario> list = new ArrayList<Comentario>();
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT * FROM comentarios");
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
            Comentario comentario = new Comentario();
            comentario.setId_comentario(rs.getInt("Id"));
            comentario.setNome_usuario(rs.getString("Nome"));
            comentario.setTexto(rs.getString("Comentario"));         
            comentario.setId_usuario(rs.getInt("Id_usuario"));   
            list.add(comentario);
        }
    }catch(Exception erro){
        System.out.println(erro);
    }
    return list;
    }
    
 /**Método para contar o número de usuários comuns
 * @author Bola Mundi
 * @return int - numpart (usuário comum)
 */      
    
    public static int getParticipante(){
    int numpart=0;
        try{
    Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) as Usuario FROM usuarios WHERE Acesso='Usuario'");
        ResultSet rs = ps.executeQuery();
        
        
        while(rs.next()){
                 numpart=rs.getInt("Usuario");
            }  
    
    }catch(Exception erro){
    
   System.out.println(erro);
    }
    return numpart;
  
    }
    
 /**Método para contar o número de usuários administradores
 * @author Bola Mundi
 * @return int - numadm (usuário admin)
 */    
    
    public static int getAdm(){
    int numadm=0;
        try{
    Connection con = getConnection();//ele esta ativando a exceção, por isso da erro
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) as admin FROM usuarios WHERE Acesso='Admin'");
        ResultSet rs = ps.executeQuery();

  
 while(rs.next()){
                 numadm= rs.getInt("admin");
            }  
            
    }catch(Exception erro){
   
   System.out.println(erro);
    }
      
    return numadm;
  
    }
    
 /**Método para contar o número de usuários 
 * @author Bola Mundi
 * @return int - contagem 
 */     
    
    public static int getContagem() {
        int contagem = 0;
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS contagem FROM usuarios");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                contagem = rs.getInt("contagem");
            }   
        }catch(Exception erro){
            System.out.println(erro);
        }
        return contagem;
    }
    
 /**Método para selecionar a data de criação dos usuários para criar o chart que visualiza a quantidade de usuários cadastrados por semana
 * @author Bola Mundi
 * @return semanasAno - int 
 */     
    
        public static int getAmarelaNeymar(){
    int amarelaNeymar=0;
    
        try{
    Connection con = getConnection();//ele esta ativando a exceção, por isso da erro
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) as amarelaNeymar FROM pedidos WHERE Id_produto='1'");
        ResultSet rs = ps.executeQuery();

  
 while(rs.next()){
                 amarelaNeymar= rs.getInt("amarelaNeymar");
            }  
            
    }catch(Exception erro){
   
   System.out.println(erro);
    }
      
    return amarelaNeymar;
  
    }
        public static int getAzulNeymar(){
    int azulNeymar=0;
    
        try{
    Connection con = getConnection();//ele esta ativando a exceção, por isso da erro
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) as azulNeymar FROM pedidos WHERE Id_produto='2'");
        ResultSet rs = ps.executeQuery();

  
 while(rs.next()){
                 azulNeymar= rs.getInt("azulNeymar");
            }  
            
    }catch(Exception erro){
   
   System.out.println(erro);
    }
      
    return azulNeymar;
  
    }
        public static int getAmarelaJesus(){
    int amarelaJesus=0;
    
        try{
    Connection con = getConnection();//ele esta ativando a exceção, por isso da erro
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) as amarelaJesus FROM pedidos WHERE Id_produto='5'");
        ResultSet rs = ps.executeQuery();

  
 while(rs.next()){
                 amarelaJesus= rs.getInt("amarelaJesus");
            }  
            
    }catch(Exception erro){
   
   System.out.println(erro);
    }
      
    return amarelaJesus;
  
    }
        public static int getAmarelaRaphinha(){
    int amarelaRaphinha=0;
    
        try{
    Connection con = getConnection();//ele esta ativando a exceção, por isso da erro
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) as amarelaRaphinha FROM pedidos WHERE Id_produto='6'");
        ResultSet rs = ps.executeQuery();

  
 while(rs.next()){
                 amarelaRaphinha= rs.getInt("amarelaRaphinha");
            }  
            
    }catch(Exception erro){
   
   System.out.println(erro);
    }
      
    return amarelaRaphinha;
  
    }
     
 /**Método para bloquear o usuário
 * @author Bola Mundi
 * @param Objeto da classe usuário
 * @return boolean - status
 */    
	public static int BloquearUsuario(Usuario usuario){
       int status = 0;  
       String statusUsuario;
       
       if(usuario.getStatus().equals("ativo")){
                statusUsuario = "inativo";   
	       }else{
	        statusUsuario = "ativo";   
	       }
   try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("UPDATE usuarios SET Status=? WHERE id=?");
        ps.setString(1, statusUsuario );
        ps.setInt(2, usuario.getId());         
        status = ps.executeUpdate();
    }catch(Exception erro){
        System.out.println(erro);
    }      
       return status;
   }
        
 /**Método para puxar o jogador pelo id dele
 * @author Bola Mundi
 * @param id int - Id do usuário
 * @return Objeto - Classe jogador
 */        
        
        public static Jogador getJogadorById(int id){
           Jogador jogador=null;
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("select * from jogadores where Id=?");
        ps.setInt(1, id);
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
             jogador = new Jogador();
            jogador.setId(rs.getInt("Id"));
            jogador.setNome(rs.getString("Nome"));
            jogador.setPais(rs.getString("Pais"));         
            jogador.setNumero(rs.getInt("Numero"));   
            jogador.setPosicao(rs.getString("Posicao")); 
            jogador.setIdselecao(rs.getInt("Id_selecao")); 
        }
    }catch(Exception erro){
        System.out.println(erro);
    }      
      
        return jogador;
    }
        
 /**Método para listar os dados do usuário
 * @author Bola Mundi
 * @param inicio - int início da paginação
 * @param total - int total de linhas para aparecer na tabela por página
 * @return list de objetos da classe jogador
 */           

public static List<Jogador> getJogadores(int inicio, int total) {
    List<Jogador> list = new ArrayList<Jogador>();
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT * FROM jogadores ORDER BY id LIMIT " + (inicio - 1) + " ," + total);
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
            Jogador jogador = new Jogador();
            jogador.setId(rs.getInt("Id"));
            jogador.setNome(rs.getString("Nome"));
            jogador.setPais(rs.getString("Pais"));         
            jogador.setNumero(rs.getInt("Numero"));   
            jogador.setPosicao(rs.getString("Posicao")); 
            jogador.setIdselecao(rs.getInt("Id_selecao")); 
            list.add(jogador);
        }
    }catch(Exception erro){
        System.out.println(erro);
    }
    return list;
    }

 /**Método para excluir os dados do jogador
 * @author Bola Mundi
 * @param Objeto da classe jogador
 * @return boolean - status
 */

public static int excluirJogador(Jogador jogador){
       int status = 0;  
   try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("DELETE FROM jogadores WHERE id=?");
        ps.setInt(1, jogador.getId());         
        status = ps.executeUpdate();
    }catch(Exception erro){
        System.out.println(erro);
    }      
       return status;
   }

 /**Método para cadastrar o jogador
 * @author Bola Mundi
 * @param Objeto da classe jogador
 * @return boolean - status
 */
    
    
   public static int cadastrarJogador(Jogador jogador){
       int status = 0;  
   try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("INSERT INTO JOGADORES(NOME,PAIS,NUMERO,POSICAO,ID_SELECAO) VALUES(?,?,?,?,?)");
        ps.setString(1, jogador.getNome());
        ps.setString(2, jogador.getPais());
        ps.setInt(3, jogador.getNumero());        
        ps.setString(4, jogador.getPosicao()); 
        ps.setInt(5, jogador.getIdselecao());          
        status = ps.executeUpdate();
    }catch(Exception erro){
        System.out.println(erro);
    }      
       return status;
   }
   
/**Método para editar os dados do jogador
 * @author Bola Mundi
 * @param Objeto da classe jogador
 * @return boolean - status
 */   

  public static int editarJogador(Jogador jogador){
       int status = 0;  
   try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("UPDATE jogadores SET Nome=?, Pais=?, Numero=?, Posicao=?, Id_selecao=? WHERE id=?");
        ps.setString(1, jogador.getNome());
        ps.setString(2, jogador.getPais());
        ps.setInt(3, jogador.getNumero());
        ps.setString(4, jogador.getPosicao()); 
        ps.setInt(6, jogador.getIdselecao());         
        ps.setInt(5, jogador.getId());   
        status = ps.executeUpdate();
    }catch(Exception erro){
        System.out.println(erro);
    }      
       return status;
   }
  
 /**Método para contar o número de jogadores 
 * @author Bola Mundi
 * @return int - contagem 
 */
        
   public static int getContagemJogadores() {
        int contagem = 0;
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS contagem FROM jogadores");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                contagem = rs.getInt("contagem");
            }   
        }catch(Exception erro){
            System.out.println(erro);
        }
        return contagem;
    }
   
    /**Método para pegar os produtos pelo id
 * @author Bola Mundi
 * @param id - int id do produto
 * @return Objeto da classe produto
 */
   
   public static Produto getProdutoById(int id){
           Produto produto=null;
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("select * from produtos where Id=?");
        ps.setInt(1, id);
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
             produto = new Produto();
            produto.setId(rs.getInt("Id"));
            produto.setNome(rs.getString("Nome"));
            produto.setPreco(rs.getInt("Preco"));   
            produto.setNumero_vendas(rs.getInt("Numero_vendas")); 
        }
    }catch(Exception erro){
        System.out.println(erro);
    }      
      
        return produto;
    }

      /**Método para fazer a paginação dos produtos
 * @author Bola Mundi
 * @param inicio - int início da paginação
 * @param total - int total de linhas para aparecer na tabela por página 
 * @return Lista de objetos da classe produto
 */
   
public static List<Produto> getProdutos(int inicio, int total) {
    List<Produto> list = new ArrayList<Produto>();
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT * FROM produtos ORDER BY id LIMIT " + (inicio - 1) + " ," + total);
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
            Produto produto = new Produto();
            produto.setId(rs.getInt("Id"));
            produto.setNome(rs.getString("Nome"));
            produto.setPreco(rs.getInt("Preco"));   
            produto.setNumero_vendas(rs.getInt("Numero_vendas")); 
            list.add(produto);
        }
    }catch(Exception erro){
        System.out.println(erro);
    }
    return list;
    }

 /**Método para excluir os dados do produto
 * @author Bola Mundi
 * @param Objeto da classe produto
 * @return boolean - status
 */

public static int excluirProduto(Produto produto){
       int status = 0;  
   try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("DELETE FROM produtos WHERE id=?");
        ps.setInt(1, produto.getId());         
        status = ps.executeUpdate();
    }catch(Exception erro){
        System.out.println(erro);
    }      
       return status;
   }

 /**Método para cadastrar o produto
 * @author Bola Mundi
 * @param Objeto da classe produto
 * @return boolean - status
 */
  
    
   public static int cadastrarProduto(Produto produto){
       int status = 0;  
   try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("INSERT INTO PRODUTOS(NOME,PRECO) VALUES(?,?)");
        ps.setString(1, produto.getNome());
        ps.setInt(2, produto.getPreco());                  
        status = ps.executeUpdate();
    }catch(Exception erro){
        System.out.println(erro);
    }      
       return status;
   }
   
/**Método para editar os dados do produto
 * @author Bola Mundi
 * @param Objeto da classe produto
 * @return boolean - status
 */   

  public static int editarProduto(Produto produto){
       int status = 0;  
   try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("UPDATE produtos SET Nome=?, Numero_vendas=?, Preco=? WHERE id=?");
        ps.setString(1, produto.getNome());       
        ps.setInt(2, produto.getNumero_vendas());    
        ps.setInt(3, produto.getPreco()); 
        ps.setInt(4, produto.getId());   
        status = ps.executeUpdate();
    }catch(Exception erro){
        System.out.println(erro);
    }      
       return status;
   }
  
   /**Método para contar o número de produtos 
 * @author Bola Mundi
 * @return int - produto 
 */
        
   public static int getContagemProdutos() {
        int contagem = 0;
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS contagem FROM produtos");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                contagem = rs.getInt("contagem");
            }   
        }catch(Exception erro){
            System.out.println(erro);
        }
        return contagem;
    }
   
 /**Método para logar
 * @author Bola Mundi
 * @return Objeto - Classe usuario
 */   
   
       public static Usuario logar(String email, String senha){ 
        Usuario usuario = new Usuario();    
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("select * from usuarios where Email=?");
            ps.setString(1, email);
            ResultSet rs = ps.executeQuery();
            //Verifica se a consulta retornou resultado
            if (rs.next()) {       
                        if(rs.getString("Senha").equals(senha)){
                            usuario.setId(rs.getInt("Id"));
                            usuario.setNome(rs.getString("Nome"));
                            usuario.setEmail(rs.getString("Email"));         
                            usuario.setSenha(rs.getString("Senha")); 
                            usuario.setAcesso(rs.getString("Acesso"));                                   
                        }else{
                            //Senha errada
                            usuario = null;
                        }

            }else{
                // E-mail não existe
                usuario = null; 
            }
        }catch(Exception erro){
            System.out.println(erro);
        }      
            return usuario;
        }
            
}