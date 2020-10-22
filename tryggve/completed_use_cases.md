---
layout: master
include: tryggve-menu
banner: "/assets/images/sin-act-banner.png"
show-groups:
  tryggve2-offer:
    name: Tryggve offering for use cases
    link: tryggve_offer
    linkname: Information about what we can provide
  tryggve2-currentusecase:
    name: Current use cases
    link: current_use_cases
    linkname: List of Current use cases
  tryggve2-completedusecase:
    name: Completed use cases
    link: completed_use_cases
    linkname: Information about completed use cases
  tryggve2-usecase:
    name: Submit a use case proposal
    link: use_case_proposal
    linkname: How to submit a use case proposal
  tryggve2-partner:
    name: Tryggve partners
    link: partners
    linkname: Partner systems for sensitive data
  tryggve2-mainpage:
    name: Tryggve main page
    absolute_link: https://neic.no/tryggve/
    linkname: Main page
---


## Completed Use Cases

* [SCALLOP A TRYGGVE USE CASE ON ANALYSING GENETIC AND MEDICAL DATA](#scallop-a-tryggve-use-case-on-analysing-genetic-and-medical-data)
* [Schizophrenia](#schizophrenia)
* [2-2 CRC](#2-2-crc)
* [1-3 I-SCAN](#1-3-i-scan)
* [2-5 PhenoMeNal](#2-5-phenomenal)
* [1-9 Neoepitope pipeline](#1-9-neoepitope-pipeline)


### SCALLOP A TRYGGVE USE CASE ON ANALYSING GENETIC AND MEDICAL DATA

In the scallop use case a cooperative framework between research groups explored what the human genome can tell us about the links between protein levels and illnesses. In June 2016, the consortium joined the Tryggve project, which enabled them to surmount the barriers to sharing of medical data across borders. Tryggve facilitated and developed the access to secure e-Infrastructure for data, which allowed Scallop to host its large-scale biomedical research in a secure environment. One of the key elements to this was to create a system where data can be processed, but never downloaded.
More information is available [here](https://neic.no/news/2018/03/16/scallop-usecase/)

---

### Schizophrenia

In the schizophrenia use case, national register data was combined with measured genetic risk factors, in order to detect possible causes of this psychotic disorder. The Nordic countries have multiple advantages for population-based research since these countries have universal health care and a long tradition of collecting high-quality comprehensive health care data. This study combines large amount of samples across the Nordic countries and expands upon prior research by combining this data across the four Nordic countries. Phenotypic status and family history of schizophrenia and other psychiatric disorders, were extracted from the national health registers which systematically captures diagnoses from inpatient admissions and outpatient specialist treatment contacts. Tryggve and NBIS (National Bioinformatics Infrastructure Sweden) supported the research by enabling the use of the Swedish Mosler system for storing sensitive data.
The findings of this research was published and can be found at [PubMed](https://www.ncbi.nlm.nih.gov/pubmed/28942743)

---

### 2-2 CRC

**Recipient contact:** Ulla Rudsander
**Responsible person:** Jaakko Leinonen

The use case proposes implementing a Nordic data bank, or a set of interoperable data banks, for CRC related data, where different data holders could maintain, enrich, and curate data, and hand out subsets of data to research projects looking to study Nordic colorectal cancer. The initial vision was to create the data archive in Finland, and populate it with initial data transferred from Sweden, to stimulate a culture of data sharing.
The use case was started as a research use case, but during its course it was more concentrating on infrastructure service for long term support to Nordic colorectal cancer research.
The described needs showed significant similarities to the use case of Data archive for biobanking, and the two use cases could likely benefit greatly from being addressed in a coordinated fashion. Hence, the focus of the use case was slightly shifted to first demonstrating resource extendibility between two Nordic research infrastructures, one in Karolinska Institutet and the other in CSC, and then forming a common database for CRC related data for researchers in both countries.
The use case has allocated compute resources from a virtual private IaaS cloud ePouta in Finland, and attached them successfully to an existing research infrastructure hosted in Karolinska Institutet using a direct virtual private network provided by FUNET and SUNET. However, setting up the networking in Karolinska Institutet did take a significant amount of time pushing the use case time schedule way beyond its intended schedule. In the end, the technical solution extends network and compute resources from Sweden to Finland creating a platform for jointly analysing data enabling a common work space where authorized scientists across the nordic countries can work with sensitive pseudoanonymized data and get access to aggregated results.
After the technical implementation it became clear that the data hosted by the Finnish party did  not meet requirements for arranging reasonable authorization methods for forming a common database, which led to re-scoping the use case and, later, to its conclusion.

---

### 1-3 I-SCAN

**Recipient contact:** Lise Helsingen
**Responsible person:** Henric Zazzi

The I-SCAN study, aka Scandinavian CANcer in Inflammatory bowel disease study, is a Collaboration between researchers at the University of Oslo, Karolinska Institutet and Aarhus University. Their goal is to find updated and valid estimates for cancer risk in patients with inflammatory bowel disease, and eventually develop a prediction model for cancer risk for use in clinical practice.
The study focuses on collecting individual patient data from hospital registries and Nationwide registries in Denmark, Norway and Sweden and stores it at servers for sensitive data at our respective institutions. In Norway the use case is collaborating with Frontier Science who is setting up OpenClinica inside TSD to be used for the data collection, and the final goal is to set up similar systems across the nordic countries.
The use case was concluded as analysis infrastructure was established on TSD and approved by the Swedish ethical committee and the Danish patient safety authority as a solution for collection of case cohort data in DK and SE.
More information about this use case can be found at https://www.med.uio.no/helsam/english/research/projects/ibd/index.html

---

### 2-5 PhenoMeNal

**Recipient contact:** Ola Spjuth
**Responsible person:** Abdulrahman Azab

This is an infrastructure use case focusing on developing a virtual research environment in secure clouds in close proximity to the data. The idea is that sensitive data cannot be moved due to technical and legal issues, but can still exist at multiple separate sites.
PhenoMeNal's VRE (Virtual Research Environment) has been developed to be deployed in secure clouds in close vicinity to these data and thereby certifies that the same analysis method is used for related data located at different sites.
PhenoMeNal VRE has been successfully deployed on ePouta, Computerome, TSD and Mosler.
The scope for the use case expanded after this initial evaluation but it was decided not to support this use case further due to lack of scope and time.
More information on PhenoMeNal can be found at https://phenomenal-h2020.eu/home/

---

### 1-9 Neoepitope pipeline

**Recipient contact:** Monika Sekelja
**Responsible person:** Henric Zazzi

Vaccibody is focusing on developing personalized neoepitope peptides which are unique against patient tumors. Extensive bioinformatic tools have been developed in-house but the analysis speed needs to be escalated as the amount of peptides is increasing. More information about this use case can be found at https://www.vaccibody.com/
This is the first use case where Tryggve2 supports a company. It was labeled as a high priority use case due to the fact that it could pave the way to similar use cases within Tryggve2. As a company use case several legal ramifications need to be evaluated to establish the amount of support that could be carried out between academia and companies.
The use case was concluded after a number of learning sessions on how to access TSD, and how to package analysis pipelines into containers.

---
