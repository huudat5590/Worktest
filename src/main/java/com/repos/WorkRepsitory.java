package com.repos;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;

import com.entities.Work;


public interface WorkRepsitory extends JpaRepository<Work, Integer>{
	
	//@Query(value = "SELECT u FROM ITArea u WHERE u.areaName =:areaName")
	//public List<Work> findAllByAreaName( @Param("areaName") String areaName);

	@Query(value = "SELECT u FROM Work u WHERE  ( u.workid = :workid )")
	public List<Work> CountById1( @Param("workid") Integer workid);
	

}
