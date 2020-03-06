package work;

import static org.junit.Assert.assertEquals;
import static org.junit.Assert.assertTrue;

import java.util.ArrayList;
import java.util.Calendar;
import java.util.Date;
import java.util.List;

import org.junit.Before;
import org.junit.Test;
import org.springframework.format.datetime.joda.DateTimeParser;
import org.springframework.http.MediaType;
import org.springframework.test.web.servlet.MvcResult;
import org.springframework.test.web.servlet.request.MockMvcRequestBuilders;

import com.entities.Work;
import com.google.gson.Gson;


public class WorkControllerTest extends AbstractTest {
   @Override
   @Before
   public void setUp() {
      super.setUp();
   }
   
   
   @Test
   public void get_AllWorksList() throws Exception {
      String uri = "/work/all";
      MvcResult mvcResult = mvc.perform(MockMvcRequestBuilders.get(uri)
    		  .param("pageNo","0")
    		  .param("pageSize", "10")
    		  .param("sortBy", "workid")
         .accept(MediaType.APPLICATION_JSON_VALUE)).andReturn();
      
      int status = mvcResult.getResponse().getStatus();
      assertEquals(200, status);
      String content = mvcResult.getResponse().getContentAsString();
      Work[] Worklist = super.mapFromJson(content, Work[].class);
      assertTrue(Worklist.length > 0);
   }
   

   @Test
   public void get_AllWorksListPageable() throws Exception {
      String uri = "/work/findAllbypage";
      MvcResult mvcResult = mvc.perform(MockMvcRequestBuilders.get(uri)
         .accept(MediaType.APPLICATION_JSON_VALUE)).andReturn();
      
      int status = mvcResult.getResponse().getStatus();
      assertEquals(200, status);
      String content = mvcResult.getResponse().getContentAsString();
      Work[] Worklist = super.mapFromJson(content, Work[].class);
      assertTrue(Worklist.length > 0);
   }
   
   
   
   
   @Test
   public void get_WorksListbyId() throws Exception {
      String uri = "/work/findbyid";
      MvcResult mvcResult = mvc.perform(MockMvcRequestBuilders.get(uri).param("workid", "10")
         .accept(MediaType.APPLICATION_JSON_VALUE))
    		  .andReturn();
      
      int status = mvcResult.getResponse().getStatus();
      assertEquals(200, status);
      String content = mvcResult.getResponse().getContentAsString();
      Work[] Worklist = super.mapFromJson(content, Work[].class);
      assertTrue(Worklist.length > 0);
   }
   
   
  
   @Test
   public void addnew() throws Exception {
	   
	   Calendar cal = Calendar.getInstance();
	    Date date=cal.getTime();
	   
      String uri = "/work/add";
      Work work = new Work();
      work.setWorkid(null);
      work.setWorkname("GingerMan");
      work.setStatus("Doing");
      work.setStartingdate( date);
      
      String inputJson = super.mapToJson(work);
      MvcResult mvcResult = mvc.perform(MockMvcRequestBuilders.post(uri)
    	 .accept(MediaType.APPLICATION_JSON_VALUE)
         .contentType(MediaType.APPLICATION_JSON_VALUE)
         .content(inputJson)).andReturn();
      
      int status = mvcResult.getResponse().getStatus();
      assertEquals(200, status);
      String content = mvcResult.getResponse().getContentAsString();
      assertEquals(content, "Save Successful");
   }
   
  
   @Test
   public void updateWorkbylist() throws Exception {
      String uri = "/work/updatesbylist";

	  
	  
	  java.util.Date dt = new java.util.Date();

	  java.text.SimpleDateFormat sdf = 
	       new java.text.SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
	   
	  String currentTime = sdf.format(dt);
	  Date  savetime = sdf.parse(currentTime.trim());
	  
	  
	  
	  Work work1 = new Work();
	  Work work2 = new Work();
	  Work work3 = new Work();
	  
	  
	  work1.setStatus("Planing");work1.setEndingdate(savetime);work1.setWorkname("obc0");
	  work2.setStatus("Planing");work2.setEndingdate(savetime);work2.setWorkname("obc1");
	  work3.setStatus("Planing");work3.setEndingdate(savetime);work3.setWorkname("obc2");
	
	  
	  List<Work> works = new ArrayList<Work>() ;
	  works.add(work1);
	  works.add(work2);
	  works.add(work3);
	  
      String inputJson =  new Gson().toJson(works);
     
      MvcResult mvcResult = mvc.perform(MockMvcRequestBuilders.put(uri)
         .contentType(MediaType.APPLICATION_JSON_VALUE)
         .accept(MediaType.APPLICATION_JSON_VALUE)
         .content(inputJson)).andReturn();
      
      int status = mvcResult.getResponse().getStatus();
      assertEquals(200, status);
      String content = mvcResult.getResponse().getContentAsString();
      assertEquals(content, "Save Successful");
   }
   
   
   
   @Test
   public void deleteWorks() throws Exception {
	   
      String uri = "/work/deletebylist";
      Work work = new Work();
      work.setWorkid(82);  // change workid if you want
      work.setWorkname("GingerMan");
      work.setStatus("Doing");
      
      List<Work> works = new ArrayList<Work>() ;
      works.add(work);
      
      String inputJson =  new Gson().toJson(works);
      
      MvcResult mvcResult = mvc.perform(MockMvcRequestBuilders.delete(uri)
    		  .contentType(MediaType.APPLICATION_JSON_VALUE)
    	         .accept(MediaType.APPLICATION_JSON_VALUE)
    	         .content(inputJson))
    		  .andReturn();
      int status = mvcResult.getResponse().getStatus();
      assertEquals(200, status);
      String content = mvcResult.getResponse().getContentAsString();
      assertEquals(content, "Deleted Successful");
   }
}