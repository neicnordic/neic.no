---
title: "Improved Observation Usage in Numerical Weather Prediction (NWP): the iOBS Project"
summary: "As a follow up to the work members of the first Glenna project performed together with experts at FMI, Met.Norway and SMHI to
cloudify a scaled down numerical weather prediction (NWP) code, we will continue the collaboration with the same partners in a new project called iOBS, funded by Nordforsk and managed by NeIC."
photo: "/assets/images/latest-news-13.png"
---

Improved Observation Usage in Numerical Weather Prediction (NWP): the iOBS Project
===========================

**As a follow up to the work members of the first Glenna project performed together with experts at FMI, Met.Norway and SMHI to cloudify a scaled down numerical weather prediction (NWP) code, we will continue the collaboration with the same partners in a new project called
iOBS, funded by Nordforsk and managed by NeIC. The consortium will receive funding for two years to the tune of 10 MNOK (including 50% in kind funding)  and spend an effort equal to approximately 100 person months.**

The iOBS initiative will accommodate an increasing amount and diversity of observation data, and provide a system of harmonised data 
pooling and merging. Observations from the “Internet of things” (IoT), such as intelligent cars, phones, buildings and personal weather 
stations (PWS), including commodity weather sensors, provide detailed information on local to hyper-local meteorological phenomena. 

The targeted breakthrough and measurable benefit of this project is the effective assimilation of diverse observations in regional 
high-resolution NWP models for the delivery of reliable and accurate weather forecasts and warnings for the benefit of operations, 
business and society. The basis will be the current operational NWP model, AROME-MetCoOp and/or the very recent addition of a nowcasting
suite; ultra-local resolution observation network (both spatial and temporal) may be even more suitable for very high-resolution NWP
models on the sub-kilometric scale, and the project results will be a valuable contribution to its on-going development.

The project will improve, develop and implement timely quality control (QC) algorithms for a massive amount of private observations of
surface pressure using an existing data source covering the Nordic countries. Since the Scalable Acquisition and Pre-Processing system
(SAPP) is modular the QC could be added to the overall observation handling. Other emerging observation types will also be explored
within the limits of the project. If successful, this will to our knowledge be for the first time private pressure observations are 
assimilated in an operational NWP system. There are some research on assimilation of pressure from mobile phones, e.g. at Danish
Meteorological Institute (DMI), and these case studies have identified a potential increase in forecast accuracy by introducing these 
observations in NWP. Preliminary investigation into both mobile phone pressure data and private in-situ pressure data, shows more 
promise to the latter due to its stationarity. Mobile phones introduce an artificial pressure tendency when it is moving, especially 
vertically. Regarding private observations we will maintain the data history and protect personal information and/or sensitive data.  

The observation data flow will be built in parallel on two future generation e-infrastructures: post-processing infrastructure (PPI) 
and Glenna-2. PPI provides flexibility and scalability in computing data storage capacity as well as full end-to-end data integrity to 
meet modern requirements on data consistency. PPI offers the benefits of both building on existing operational solutions, run as an
operational environment and act as a reference to the cloud service. Glenna-2 will make effective use of hybrid environments combining
specialized HPC resources and for example container technology with the more flexible cloud delivery model. Having two e-infrastructures
solutions offers redundancy and flexibility, addressing the needs and requirements of Nordic (and beyond) research and operations.  

The Glenna virtual infrastructure and other cloud infrastructures provide an environment to run processing and machine learning tasks
in a portable and cost-efficient manner. This allows to scale up and to scale down virtual infrastructures via APIs according to the
needs. However, to achieve constant throughput and bandwidth, dedicated and non-shared cloud infrastructure must be allocated. 
Non-shared virtual infrastructure is also required in the context of benchmarking and code optimizing. 

To summarize, the quantifiable benefits in this 2-year project include: 
- Improved NWP forecast quality from increased number of observations used in data assimilation 
- Improved QC algorithms for pre-processing private observations where machine learning approaches might help to further identify important observation errors and/or instrument malfunctions
- Reduced cost for software maintenance and development for increased efforts in research and development
- Improved conditions for Nordic research collaboration on both novel technologies and handling of different observation types
- Knowledge transfer across scientific disciplines and technological solutions  
- Redundancy and flexibility by using both a cloud based research infrastructure (Glenna-2) and a proven operational infrastructure (PPI)
- Raise awareness of benefits of public-private partnerships, e.g. our QC will inform data manufacturers about their data quality (a interest that they have already expressed)
