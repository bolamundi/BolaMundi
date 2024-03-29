/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dao;

import classes.Usuario;
import classes.Comentario;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author aluno
 */
public class Dao {

    public static Connection getConnection(){
    Connection con = null;
    try{
        Class.forName("com.mysql.jdbc.Driver");       
        con=DriverManager.getConnection("jdbc:mysql://localhost:3306/id18524654_loginbolamundi","root","");
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
       
     public static List<Usuario> getUsuarioTempo() {
    List<Usuario> list = new ArrayList<Usuario>();
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT * FROM usuarios ORDER BY id LIMIT " );
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
            Usuario usuario = new Usuario();
           usuario.setData(rs.getString("data"));
            list.add(usuario);
        }
    }catch(Exception erro){
        System.out.println(erro);
    }
    return list;
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
}

    
}
