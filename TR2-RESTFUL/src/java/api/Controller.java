/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package api;

/**
 *
 */

import java.sql.Connection;
import java.sql.SQLException;
import java.util.ArrayList;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

@Path("controller")
public class Controller {
    dbHelper kon = new dbHelper();
    java.sql.Statement stm;
    java.sql.ResultSet res;
    String sql;
    
    @GET
    @Path("/getData")
    @Produces(MediaType.APPLICATION_JSON)
    public ArrayList<Model>getData() throws ClassNotFoundException{
        ArrayList<Model> data = new ArrayList<>();
        try {
            String sql = "SELECT id, nama, progdi, nim FROM db_mhs";
            java.sql.Connection conn=(Connection)kon.configDB();
            stm=conn.createStatement();
            res=stm.executeQuery(sql);
            while(res.next()){
                Model tmp = new Model();
                tmp.setId(res.getString(1));
                tmp.setNama(res.getString(2));
                tmp.setProgdi(res.getString(3));
                tmp.setNim(res.getInt(4));
                data.add(tmp);
            }
            stm.close();
            conn.close();
        } catch (Exception e) {
            System.out.println(e.getMessage());
        }
        return data;
    }
    
    @POST
    @Path("/inputData")
    @Produces(MediaType.APPLICATION_JSON)
    public String inputData(Model model) {
        try {
            sql = "INSERT INTO db_mhs(nama,progdi,nim) VALUES ('" + model.getNama() 
                    + "','" + model.getProgdi() + "','"+ model.getNim() +"')";
            java.sql.Connection conn = (Connection) kon.configDB();
            java.sql.PreparedStatement pst = conn.prepareStatement(sql);
            pst.execute();
            pst.close();
            conn.close();
        } catch (Exception e) {
            System.out.println(e.getMessage());
        }
        String result = "Mahasiswa atas nama : " + model.getNama() + " Dengan nim " + model.getNim()+" berhasil di input" ;
        return result;
    }

    
    @POST
    @Path("/delete")
    @Produces(MediaType.APPLICATION_JSON)
    public String delete(Model model) {
        try {
            sql ="delete from db_mhs where ID='"+model.getId()+"'";
            java.sql.Connection conn=(Connection)kon.configDB();
            
            java.sql.PreparedStatement pst=conn.prepareStatement(sql);
            pst.execute();
            System.out.println(sql);
        } catch (Exception e) {
            System.out.println(e.getMessage());
        }
        return "Mahasiswa dengan id : "+model.getId()+" telah berhasil dihapus";
    }
    
    @POST
    @Path("/updateData")
    @Produces(MediaType.APPLICATION_JSON)
    public String updateData(Model model) throws SQLException{
        try{
            //UPDATE `db_mhs` SET `id`=[value-1],`nama`=[value-2],`progdi`=[value-3],`nim`=[value-4] WHERE 1
            sql = "update db_mhs set id="+ model.getId()+", nama='" + model.getNama() + "', progdi ='" +
                    model.getProgdi() + "',nim ='" + model.getNim() +
                    "' where id ='" + model.getId()+"';";
            java.sql.Connection conn = (Connection) kon.configDB();
            java.sql.PreparedStatement pst=conn.prepareStatement(sql);
            pst.execute();
            System.out.println(sql);
        } catch (Exception e ) {
            System.out.println(e.getMessage());
        }
        return "Mahasiswa dengan nama : " + model.getNama() + " telah dirubah";
    }
    
}   
