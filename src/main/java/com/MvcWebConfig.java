package com;

import java.util.List;

import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.annotation.Configuration;
import org.springframework.format.FormatterRegistry;
import org.springframework.http.converter.HttpMessageConverter;
import org.springframework.validation.MessageCodesResolver;
import org.springframework.validation.Validator;
import org.springframework.web.method.support.HandlerMethodArgumentResolver;
import org.springframework.web.method.support.HandlerMethodReturnValueHandler;
import org.springframework.web.servlet.HandlerExceptionResolver;
import org.springframework.web.servlet.config.annotation.AsyncSupportConfigurer;
import org.springframework.web.servlet.config.annotation.ContentNegotiationConfigurer;
import org.springframework.web.servlet.config.annotation.CorsRegistry;
import org.springframework.web.servlet.config.annotation.DefaultServletHandlerConfigurer;
import org.springframework.web.servlet.config.annotation.EnableWebMvc;
import org.springframework.web.servlet.config.annotation.InterceptorRegistry;
import org.springframework.web.servlet.config.annotation.PathMatchConfigurer;
import org.springframework.web.servlet.config.annotation.ResourceHandlerRegistry;
import org.springframework.web.servlet.config.annotation.ViewControllerRegistry;
import org.springframework.web.servlet.config.annotation.ViewResolverRegistry;
import org.springframework.web.servlet.config.annotation.WebMvcConfigurer;
@Configuration
@EnableWebMvc
@ComponentScan("com.WebController")
public class MvcWebConfig implements WebMvcConfigurer {

//   @Autowired
//   private ApplicationContext applicationContext;
//
//   /*
//    * STEP 1 - Create SpringResourceTemplateResolver
//    * */
//   @Bean
//   public SpringResourceTemplateResolver templateResolver() {
//      SpringResourceTemplateResolver templateResolver = new SpringResourceTemplateResolver();
//      templateResolver.setApplicationContext(applicationContext);
//      templateResolver.setPrefix("/templates/");
//      templateResolver.setSuffix(".html");
//      return templateResolver;
//   }
//
//   /*
//    * STEP 2 - Create SpringTemplateEngine
//    * */
//   @Bean
//   public SpringTemplateEngine templateEngine() {
//      SpringTemplateEngine templateEngine = new SpringTemplateEngine();
//      templateEngine.setTemplateResolver(templateResolver());
//      templateEngine.setEnableSpringELCompiler(true);
//      return templateEngine;
//   }
//
//   /*
//    * STEP 3 - Register ThymeleafViewResolver
//    * */
//   @Override
//   public void configureViewResolvers(ViewResolverRegistry registry) {
//      ThymeleafViewResolver resolver = new ThymeleafViewResolver();
//      resolver.setTemplateEngine(templateEngine());
//      registry.viewResolver(resolver);
//   }
	
	
	private static final String[] RESOURCE_LOCATIONS = {
			"classpath:/META-INF/resources/", "classpath:/resources/",
			"classpath:/static/", "classpath:/public/", "classpath:/resources/templates/","classpath:/templates/"};
	@Override
	public void addResourceHandlers(ResourceHandlerRegistry registry) {
		
		if (!registry.hasMappingForPattern("/**")) {
			registry.addResourceHandler("/**").addResourceLocations(
					RESOURCE_LOCATIONS);
		}
	}
	
   
   
   

}