package com;

import org.springframework.beans.factory.annotation.Value;
import org.springframework.core.io.Resource;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.context.support.ServletContextResource;


@Controller
public class WebController {
//    @Value("${spring.application.name}")
//    String appName;
 
    @GetMapping("/")
    public String homePage() {
        //model.addAttribute("appName", appName);
        return "login";
    }
    
  
    
    
    
}