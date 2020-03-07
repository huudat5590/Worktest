package com.entities;

import java.io.IOException;
import java.io.Serializable;
import java.sql.Date;
import java.text.SimpleDateFormat;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

import org.hibernate.annotations.CreationTimestamp;

import com.fasterxml.jackson.core.JsonParser;
import com.fasterxml.jackson.databind.DeserializationContext;
import com.fasterxml.jackson.databind.annotation.JsonDeserialize;
import com.fasterxml.jackson.databind.deser.std.StdDeserializer;
import com.google.gson.annotations.Expose;

@Entity
@Table(name="Work")
public class Work implements Serializable{
	
public Work() {
		
	}

@Expose
@Column(name="workname", length=256)
private String workname;

@Expose
@Column(name="status", length=256)
private String status;


public String getStatus() {
	return status;
}


public void setStatus(String status) {
	this.status = status;
}

//@CreationTimestamp
//@JsonDeserialize(using = DateHandler.class)
@Temporal(TemporalType.TIMESTAMP)
@Expose
@Column(name="endingdate", columnDefinition="DATETIME",length=256)
private java.util.Date endingdate;


//@CreationTimestamp
//@JsonDeserialize(using = DateHandler.class)
@Temporal(TemporalType.TIMESTAMP)
@Expose
@Column(name="startingdate", columnDefinition="DATETIME",length=256)
private java.util.Date startingdate;


@Id
@GeneratedValue(strategy = GenerationType.IDENTITY)
@Expose
@Column(name="workid", length=256,nullable=false, unique=true)
private Integer workid;

public String getWorkname() {
	return workname;
}


public void setWorkname(String workname) {
	this.workname = workname;
}


public java.util.Date getEndingdate() {
	return endingdate;
}


public void setEndingdate(java.util.Date endingdate) {
	this.endingdate = endingdate;
}


public java.util.Date getStartingdate() {
	return startingdate;
}


public void setStartingdate(java.util.Date startingdate) {
	this.startingdate = startingdate;
}


public Integer getWorkid() {
	return workid;
}


public void setWorkid(Integer workid) {
	this.workid = workid;
}



}
