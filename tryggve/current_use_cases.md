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


## Current use cases (Concluded by the end of the project)

* [1-4 NorTwinCan](#1-4-nortwincam)
* [1-1 Schizophrenia](#1-1-schizophrenia)
* [2-9 Impute](#2-9-impute)
* [2-12 TryggveInGalaxy](#2-12-tryggveingalaxy)
* [1-10 NordTreat](#1-10-nordtreat)
* [1-11 SARS-CoV-2 Strain Database and analysis](#1-11-sars-cov-2-train-database-and-analysis)
* [2-11 COVID-19 Secure cloud infrastructure](#2-11-covid-19-secure-cloud-infrastructure)

---

### 1-4 NorTwinCan

**Recipient contact:** Jaakko Kaprio
**Responsible person:** Minna Ahokas

The Nordic twin study of cancer is investigating the genetic and environmental nature of cross-cancer associations in monozygotic and dizygotic twins. It presently contains ~350000 twins from Norway, Denmark, Sweden and Finland and is the largest twin study in the world available for the research of the heritability and familial risk of cancers such as prostate, breast, ovarian, and colon cancer.
The use case strives to develop remote data access from a single secure computation platform through a remote desktop connection to datasets across the Nordic countries. 
Tryggve together with ELIXIR EGA is developing a data management platform for sensitive datasets which is suited for the needs of the use case. Researchers would access datasets stored remotely in each of the providing locations through a Remote Desktop and process them in ePouta, a secure cloud for sensitive data provided by CSC. The datasets themselves would be hosted by their respective owners and secure. Already implemented support for ELIXIR AAI authentication for ePouta Remote Desktop ensures the authorised access. 
When the NorTwinCan sites are ready for pilot phase, each site will deploy the Sensitive Data Archive and make the scrambled NorTwinCan data available for access in ePouta Remote Desktop. In the future, the shared sensitive data processing environment can be extended to other countries to support researchers in data analysis and method development.
Presently, the use case is securing that development and production is facilitated prior to the completion of Tryggve2. More information about NorTwinCan can be found at http://nortwincan.org/

---

### 1-1 Schizophrenia

**Recipient contact:** Patrick Sullivan
**Responsible person:** Abdulrahman Azab

The schizophrenia project is directly a continuation of former project Sullivan in Tryggve1. 
The aim of  the use case is to do systematic analyses of the interaction of genetic risk with known/replicated environmental risk factors for schizophrenia.
This is a collaboration between Norway, Denmark, Sweden, Finland and one of the goals is to share a management platform for sensitive datasets. The use case has been focusing on development of an analysis pipeline for schizophrenia, optimizing analysis and packaging that pipeline to simplify sharing across associated scientific groups within the nordic countries. Sharing of data studied with a validated analysis tool would increase the quality of the combined analysis and increase the possibility to discover additional genetic factors that have an impact on schizophrenia.
The project has received new funding from the CoMorMent Horizon2020 project and will continue with new and old participants after the completion of Tryggve2.

---

### 2-9 Impute

**Recipient contact:** Patrick Sullivan
**Responsible person:** Abdulrahman Azab

This is an infrastructure use case centered on the development of a Nordic Imputation Server (NIS). This will create a distributed system for imputation of GWAS data against Nordic reference genomes. The developed imputation server will be publicly available and has attracted interest from various scientific groups, as well as several use cases within Tryggve2. The imputation project will also continue with the funds from the same CoMorMent grant, as mentioned in the **1-1 Schizophrenia project**,  after the completion of Tryggve2.ata

---

### 2-12 TryggveInGalaxy

**Recipient contact:** Eivind Hovig
**Responsible person:** Abdulrahman Azab

This project aims to make many of the regular bioinformatics analyses that are provided online today in Galaxy instances for non-sensitive data, available also for researchers with sensitive data. In practice, this means deploying Galaxy in a convenient way inside Nordic infrastructures for sensitive data. The project initiative stems from Elixir Norway for sensitive data project(s) joining Nordic collaborators on associations between disease and genetics (including bi-sulphite sequencing data), and will start the implementation phase for TSD. 
This is an infrastructure use case that is well underway, and could be finalized prior to the ending of Tryggve2.

---

### 1-10 NordTreat

**Recipient contact:** Dirk Repsilber
**Responsible person:** Henric Zazzi

NORDTREAT is a multi-centre, cross-disciplinary collaborative project between academia, hospitals, biomedical companies and patient organisations, and expanding on already established collaboration across the Nordic countries.
The aim of the use case is to implement a personalised medicine-based treatment strategy trial, built on a novel serum protein signature that allows to stratify newly diagnosed patients by their predicted future disease course and adapt the treatment strategy.
The use case needs support in contact with the nordic sensitive data storage, transfer of data and legal ramification of sharing data within the nordic countries.
More information about NordTreat can be found at https://www.oru.se/forskning/forskningsprojekt/fp/?rdb=p2092.

---

### 1-11 SARS-CoV-2 Strain Database and analysis

**Recipient contact:** Eivind Hovig
**Responsible person:** Abdulrahman Azab

This use case will study the mutation frequency of SARS-CoV-2 virus, and construct an evolutionary tree using available data from public strain archives and from samples collected from COVID-19 infected patients.
Data will be analysed by constructing a Galaxy pipeline to identify candidate inhibitors again SARS-Cov-2 Mpro protease.
Although this project will not see an ending within Tryggve2, this use case will formally start in november as it has been accepted as a NeIC project in collaboration with PaRI. You can find more information about the PaRI project at https://neic.no/news/2020/06/11/new-covid-19-project/

---

### 2-11 COVID-19 Secure cloud infrastructure

**Recipient contact:** Frank Møller Aarestrup
**Responsible person:** Ali Syed
**(This use case has been muted du to the lack of input from the recipient)**

This use case focuses on creating a blueprint for a cloud solution for use in the current COVID-19 outbreak and will be available for future outbreaks regardless of their size, using trusted data and secure standardised tool sets to enhance the analyses with the user's own data and customized methods.
Currently, there are demands for services based on the real-time comparison of different epidemiological analyses of the same data, as well a major need for exchange of more person-sensitive information, such as geolocalisation, patient information,  etc., between authorities, researchers and different countries. The ideal solution will allow integration of patient-specific and population-wide levels of epidemiological data and combine it with sequencing and later serological information. 
Although this project will not see an ending within Tryggve2, this use case will continue as it has been accepted as a NeIC project in collaboration with PaRI. You can find more information about the PaRI project at https://neic.no/news/2020/06/11/new-covid-19-project/

---

