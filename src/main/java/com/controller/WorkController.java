package com.controller;

import java.util.ArrayList;
import java.util.List;


import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.PropertySource;
import org.springframework.data.domain.Page;
import org.springframework.data.domain.PageRequest;
import org.springframework.data.domain.Pageable;
import org.springframework.data.domain.Sort;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

import com.entities.Work;
import com.repos.WorkRepsitory;


@Controller
@RequestMapping(path = "/work", produces="application/json;charset=UTF-8")
@PropertySource("classpath:application.properties")
public class WorkController {
	
	
@Autowired 
private WorkRepsitory WorkRepsitory;



// List all
@RequestMapping(value="/all",method = RequestMethod.GET,produces="application/json;charset=UTF-8")
@ResponseBody
public List <Work> findAll() {
return WorkRepsitory.findAll();
}


//List all by sorting and pageable
@RequestMapping(value="/findAllbypage",method = RequestMethod.GET,produces="application/json;charset=UTF-8")
@ResponseBody
public List <Work> findAllbypage(@RequestParam(defaultValue = "0") Integer pageNo, 
        @RequestParam(defaultValue = "10") Integer pageSize,
        @RequestParam(defaultValue = "workid") String sortBy) {
	
	Pageable paging = PageRequest.of(pageNo, pageSize, Sort.by(sortBy));
	 
    Page<Work> pagedResult = WorkRepsitory.findAll(paging);
	
	if(pagedResult.hasContent()) {
        return pagedResult.getContent();
    } else {
        return new ArrayList<Work>();
    }
	
//return (List<Work>) WorkRepsitory.findAll(PageRequest.of(1, 5, Sort.by("sortBy").descending()));


}



// Update
@RequestMapping(value="/updatesbylist", method = RequestMethod.PUT,produces="application/json;charset=UTF-8")
@ResponseBody
public String updateuserList(@RequestBody List<Work> requestBody) {
try {
String UserListUpdate = "";
if(!requestBody.isEmpty()) {
	WorkRepsitory.saveAll(requestBody);
		return "Save Successful";
}
return "No records have been saved";
}catch(Exception ex ) {
	return "No records have been saved" + ex.toString();
}
}

//Update
@RequestMapping(value="/add", method = RequestMethod.POST,produces="application/json;charset=UTF-8")
@ResponseBody
public String addnew(@RequestBody Work requestBody) {
try {

if(WorkRepsitory.CountById1(requestBody.getWorkid()).size()==0) {
	WorkRepsitory.save(requestBody);
		return "Save Successful";
}
return "Record is exits";
}catch(Exception ex ) {
	return "No records have been saved, Error" + ex.toString();
}
}

@RequestMapping(value="/deletebylist", method = RequestMethod.DELETE,produces="application/json;charset=UTF-8")
@ResponseBody
public String deleteuserlist(@RequestBody List<Work> requestBody) {
try {

	WorkRepsitory.deleteAll(requestBody);				
		return "Deleted Successful" + requestBody.toString();

}catch(Exception ex ) {
	return "Delete Failed" + ex.toString();
}
}

}
