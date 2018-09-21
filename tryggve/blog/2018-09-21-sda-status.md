---
title: "Update from Tryggve D-1 Sensitive Data Archiving"
summary: "Local EGA is one of the most crucial projects in the Sensitive Data Archiving scope as well as the strong example of productive and successful collaboration of many parties. Plenty of interesting things are happening within the Local EGA project lately, so let’s get a brief overview of the recent activities, achievements and further plans."
photo: "/assets/images/tryggve/lega-dev-f2f.jpg"
layout: master
include: document
banner: "/assets/images/sin-act-banner.png"
---

Update from Tryggve D-1 Sensitive Data Archiving
===========================

#### _[Dmytro Titov](../../../people/dmytro-titov/), ELIXIR Norway_

2018-09-21

**Local EGA is one of the most crucial projects in the Sensitive Data Archiving scope as well as the strong example of productive and successful collaboration of many parties. The work is done in collaboration between the NeIC Tryggve2 partners, [EMBL-EBI](https://www.ebi.ac.uk/), and [CRG](http://www.crg.es/). Plenty of interesting things are happening within the Local EGA project lately, so let’s get a brief overview of the recent activities, achievements and further plans.**

<a href="../../../assets/images/tryggve/lega-dev-f2f.jpg" class="smallpic"><img src="../../../assets/images/tryggve/lega-dev-f2f.jpg"></a>

## Recent accomplishments

### 1. First steps towards real-world deployments

Deployment of the Data In part has been implemented for all major platforms, such as:
- Docker Swarm: [https://github.com/NBISweden/LocalEGA-deploy-swarm](https://github.com/NBISweden/LocalEGA-deploy-swarm)
- Kubernetes/OpenShift: [https://github.com/NBISweden/LocalEGA-deploy-k8s](https://github.com/NBISweden/LocalEGA-deploy-k8s)
- Terraform: [https://github.com/NBISweden/LocalEGA-deploy-terraform](https://github.com/NBISweden/LocalEGA-deploy-terraform) 

Deployments are now being tested on real environments in Norway and Finland. 

### 2. Crypt4GH support

Crypt4GH is a format for [Global Alliance for Genomics and Health](https://www.ga4gh.org/) encrypted files. We have implemented two libraries to support this method of encryption:

* Java library: [https://github.com/uio-bmi/crypt4gh](https://github.com/uio-bmi/crypt4gh)
* Python library and a tool: [https://github.com/NBISweden/LocalEGA-cryptor](https://github.com/NBISweden/LocalEGA-cryptor)

Also, Crypt4GH has been integrated to the code in both the Data In and Data Out parts, we are now using Crypt4GH as a main method of encryption in Local EGA. 

### 3. Investigation of local infrastructures (e.g. TSD, CSC, etc.)
Infrastructural platforms available in Nordic countries for Local EGA’s deployment brings their own limitations to the common deployments, so we are analysing possible cons and pitfalls to be able to address potential security and performance issues.  

### 4. F2F meeting with EBI representatives
In order to synchronize our efforts with EBI developers we had a meeting at Espoo about aligning Local EGA’s Data In and EBI’s previously existing Data Out solutions. Technical details are available in a [Google Document](https://docs.google.com/document/d/1DI3crNVDYnP0hUIFiFV6yCvE4ZjT1Dw_4UQ5YtZB1F8/edit?usp=sharing)

Among other things, integration with [REMS](https://confluence.csc.fi/display/REMS/Home) was discussed during this meeting.

## Things in progress and upcoming plans
1. **Further integration with CentralEGA**: technical efforts related to implementing functionalities of interchanging data between Local EGA and Central EGA setups.
2. **Combining Data In and Data Out parts into a single solution**: Local EGA does not exist either as Data In or Data Out separately - Local EGA is a combination of both, so we are performing rapid steps towards merging both parts in a fully-functioning system.
3. **Addressing local infrastructural specifics**: As was mentioned above, local infrastructures impose some restrictions to the deployments and architecture in general, so in order to address those specific aspects we are developing some complimentary solutions.

---

_**D-1 Sensitive Data Archiving**_ is one of the deliverables in the NeIC Tryggve2 project. Feel free to contact [Niclas Jareborg](../../../people/niclas-jareborg/) with any questions concerning the activities regarding Sensitive Data Archiving and Local EGA.

