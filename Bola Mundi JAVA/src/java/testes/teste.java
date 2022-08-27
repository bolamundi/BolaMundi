/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package testes;

import classes.Usuario;
import static dao.Dao.getConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;
import java.util.GregorianCalendar;

/**
 *
 * @author aluno
 */
public class teste {
    //Aqui temos uma função que retornará uma variável do tipo inteiro
public int converterData(int _dia, int _mes){  

    //Aqui uma variável que vai armazenar o número de dias até aquela data
    int quantidadeDias = (((_mes - 1) * 30) + _dia);

    //Aqui dividimos por 7, ou seja, 7 dias na semana para saber o número de semanas
    int numeroSemana = (quantidadeDias / 7);

    //Aqui só retornamos a resposta
    return numeroSemana;
}
    public static void main(String[] args) throws SQLException {
         int semanasAno[] = null;
    
    Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT Date FROM usuarios" );
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
            
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
}
        System.out.println(semanasAno);
    }
}
