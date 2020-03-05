package com.entities;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

import org.hibernate.annotations.CreationTimestamp;

import com.google.gson.annotations.Expose;

@Entity
@Table(name="Work")
public class Work {
	
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
@Temporal(TemporalType.TIMESTAMP)
@Expose
@Column(name="endingdate", length=256)
private java.util.Date endingdate;


//@CreationTimestamp
@Temporal(TemporalType.TIMESTAMP)
@Expose
@Column(name="startingdate", length=256)
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
