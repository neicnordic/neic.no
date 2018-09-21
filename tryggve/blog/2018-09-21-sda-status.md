---
title: "Update from Tryggve D-1 Sensitive Data Archiving"
summary: "LocalEGA is one of the most crucial projects in the Sensitive Data Archiving scope as well as the strong example of productive and successful collaboration of many parties. Plenty of interesting things are happening within the LocalEGA project lately, so let’s get a brief overview of the recent activities, achievements and further plans."
photo: "/assets/images/lega-dev-f2f.jpg"
layout: master
include: document
banner: "/assets/images/sin-act-banner.png"
---

Update from Tryggve D-1 Sensitive Data Archiving
===========================

_[Dmytro Titov](../../../people/dmytro-titov/), ELIXIR Norway_

2018-09-21

**Local EGA is one of the most crucial projects in the Sensitive Data Archiving scope as well as the strong example of productive and successful collaboration of many parties. Plenty of interesting things are happening within the LocalEGA project lately, so let’s get a brief overview of the recent activities, achievements and further plans.**

<a href="../../../assets/images/lega-dev-f2f.jpg" class="smallpic"><img src="../../../assets/images/lega-dev-f2f.jpg"></a>

## Recent accomplishments

### 1. First steps towards real-world deployments

Deployment of the Data In part is implemented for all major platforms, such as:
- Docker Swarm: https://github.com/NBISweden/LocalEGA-deploy-swarm
- Kubernetes/OpenShift: https://github.com/NBISweden/LocalEGA-deploy-k8s
- Terraform: https://github.com/NBISweden/LocalEGA-deploy-terraform 
Deployments were tested on real environments in Norway and Finland.

### 2. Crypt4GH support

Crypt4GH is a format for Global Alliance for Genomics and Health encrypted files. We have implemented two libraries to support this method of encryption:

* Java library: https://github.com/uio-bmi/crypt4gh
* Python library and a tool: https://github.com/NBISweden/LocalEGA-cryptor

Also we are using Crypt4GH as a main method of encryption in LocalEGA. It’s already integrated to Data In part and it’s in progress of integrating it to a Data Out part.

### 3. Investigation of local infrastructures (e.g. TSD, CSC, etc.)
Infrastructural platforms available in Nordic countries for LocalEGA’s deployment brings their own limitations to the common deployments, so we had to analyse all possible cons and pitfalls to be able to address all potential issues. High-level overview is available here: https://docs.google.com/document/d/1sjN5oS58juAbWKwN7nce8ej0sP4SXpuC_ob-q-7lDEc/edit?usp=sharing 

### 4. F2F meeting with EBI representatives
In order to synchronize our efforts with EBI developers we had a meeting at Espoo about aligning LocalEGA’s Data In and EBI’s Data Out solutions. Materials are available here: https://docs.google.com/document/d/1DI3crNVDYnP0hUIFiFV6yCvE4ZjT1Dw_4UQ5YtZB1F8/edit?usp=sharing 

Among other things, integration with REMS was discussed during that meeting.

## Things in progress and upcoming plans
1. Further integration with CentralEGA: technical efforts related to implementing functionalities of interchanging data between LocalEGA and CentralEGA setups.
2. Integrating Crypt4GH into Data Out: EBI’s Data Out solution doesn’t support Crypt4GH at the moment, so there’s an active development of including it to that framework. 
3. Combining Data In and Data Out parts into a single solution: LocalEGA does not exist either as Data In or Data Out separately - LocalEGA is a combination of both, so we are performing rapid steps towards merging both parts in a fully-functioning system.
4. Addressing local infrastructural specifics: As was mentioned above, local infrastructures impose some restrictions to the deployments and architecture in general, so in order to address those specific aspects we are developing some complimentary solutions.
