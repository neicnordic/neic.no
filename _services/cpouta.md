---
layout: master
include: service
name: cPouta
description: The cPouta Community Cloud service is an IaaS cloud computing service.
service_provider_name: CSC
service_provider_country_code: "FI"
service_provider_homepage: http://csc.fi
category: IaaS
type: Service
status: Active
support_email: servicedesk@csc.fi
access_email: servicedesk@csc.fi
datacite_doi: 10.23673/hjkg-qb46
start: 2019-01-01
end: 2020-12-31
results:
outreach:
used_by: 
user_guide: https://docs.csc.fi/#cloud/pouta/
---
The cPouta Community Cloud service is an IaaS cloud computing service. It allows its users to access, use and manage virtualized infrastructure using a self-service model. The virtualized infrastructure consists of, but is not necessarily limited to, these resources:

    Virtual machines (instances)
    Block devices that can be attached to virtual machines (volumes)
    Virtual networks that can be used to connect virtual machines
    Floating IP addresses that can be attached to virtual machines to make them accessible from the wider Internet

The virtual machines can run on different sets of compute node hardware based on their intended use case. Currently there are nodes available for High Performance Computing (HPC), I/O intensive workloads, GPU acceleration and generic loads such as web servers or servers for software development.

Virtual machines can be given external IP addresses and accessed directly from the Internet. This provides an easy way to access virtual machines from anywhere on the Internet, but users must also take care to secure their machines. The virtual machines do not have access to any other part of the CSC infrastructure, other than what is already visible to the Internet. Application data and software must be uploaded either via the Internet or copied from CSC's existing shared storage or applications.

Users can manage their resources using a web interface accessible through a web browser and through a set of APIs which allow programmatic management of resources. In order to access and use the service the users must have a CSC user account. The virtual infrastructure of a user is separated from other users.

Supported operating systems and software:

    No particular limits regarding non-commercial operating systems.
    For commercial operating systems and sofware please contact CSC for details.

More details about the service are available at: https://research.csc.fi/cloud-computing

## Access policy
https://research.csc.fi/pouta-user-policy

## Privacy policy
https://www.csc.fi/fi/web/guest/tietosuoja
