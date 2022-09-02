/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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

/**
 *
 * @author aluno
 */
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
     
             // ps.setString(1, comentario.getTexto());
             
        status = ps.executeUpdate();
   
    }catch(Exception erro){
        System.out.println( erro);
    }
    
    return status;
    }
    
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
       
     public static int[] getUsuarioTempo() {
      int semanasAno[] = null;
      
      
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT Date FROM usuarios" );
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
            Usuario usuario = new Usuario();
         String dataUsuario=rs.getString("data");
         
        int mes;
        int dia;
       
        SimpleDateFormat mesFormatado= new SimpleDateFormat("MM");
        SimpleDateFormat diaFormatado= new SimpleDateFormat("dd");
        mes= Integer.parseInt(mesFormatado.format(dataUsuario));
        dia= Integer.parseInt(diaFormatado.format(dataUsuario));
          int quantidadeDias = (((mes - 1) * 30) + dia);

   
    int numeroSemana = (quantidadeDias / 7)+1;
            
            semanasAno[numeroSemana+1]+=1;
            //achar um metodo para transformar data em semana do ano
        }
    }catch(Exception erro){
        System.out.println(erro);
    }
    return semanasAno;
    }
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
            
}





    

