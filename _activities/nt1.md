---
layout: master
include: activity
name: Nordic WLCG tier-1 facility
type: Operations
leader: mattias-wadenstein
phase: In operation
start: 2006-01-01
end: 2050-12-31
results: "#results"
outreach: https://wiki.neic.no/wiki/Nordic_WLCG_tier-1_facility
documents:
links:
  - url: https://wiki.neic.no/wiki/Nordic_WLCG_tier-1_facility
    text: External wiki
    description: External documentation, manuals and guides.
  - url: http://wlcg-sam.cern.ch/reports/
    text: WLCG reports
    description: WLCG reports on availability and reliability, including NDGF-T1
  - url: https://wiki.neic.no/int/NeIC_NT1
    text: Internal wiki
    description: Internal working documents.
  - url: https://source.coderefinery.org/dmytrok/NT1/issues
    text: Action points
    description: Internal action point tracking.
groups:
  nt1:
    name: Team
    minutes: https://wiki.neic.no/int/Category:NDGF_Weekly_Status_Meetings
    frequency: Weekly
  nlcg:
    name: NLCG committee
    description: Governance. Nordic LGC computing grid committee.
    minutes: https://wiki.neic.no/int/Category:NLCG_Meetings
    frequency: 4 per year
  nt1-sg:
    name: Steerig Group
    minutes: https://wiki.neic.no/wiki/Category:NT1_steering_group_meetings
    frequency: 4 per year
  nt1-po:
    name: Management
    minutes: https://wiki.neic.no/int/NeIC_NT1
    frequency: Bi-weekly
---

## Nordic WLCG tier-1 facility

The Nordic distributed tier-1 facility for the worldwide computing grid serving
the large hadron collider at CERN.

NDGF Tier1 is one of 11 regional computing centres of the [Worldwide LHC
Computing Grid](http://wlcg.web.cern.ch/)  – the huge international
e-infrastructure built to provide  computing and storage for the
[CERN](http://home.web.cern.ch/). This Nordic solution is unique in  being
distributed across four countries: Denmark, Finland, Norway and  Sweden. All
resources: [All WLCG resources](http://wlcg-rebus.cern.ch/apps/pledges/resources/).

### Supported research

#### ALICE
[ALICE](http://aliceinfo.cern.ch/Public/Welcome.html) is one of the experiments
at the LHC, largely dedicated to studies  of quark-gluon plasma in heavy ion
collisions. It uses NDGF Tier1 together  with six other Tier1 centres across the
planet. All four NDGF countries  host ALICE computing and storage resources.

#### ATLAS
[ATLAS](http://atlas.web.cern.ch/Atlas/Collaboration/) is the largest LHC
experiment, dedicated to searches of new particles  and phenomena in
proton-proton collisions. NDGF Tier1 is one of 10 Tier1  centres used by ATLAS.
Three  NDGF countries, Denmark, Norway and Sweden,  host ATLAS computing and
storage.

### Services provided

#### dCache
Storage of NDGF Tier1 is distributed across many computing centres. The
dCache system , developed with contribution from NeIC, takes care of
orchestrating data stored on disks and tapes all over Scandinavia. It also
accepts data from CERN and other Tier1 centres.

### Operations
A number of additional services are necessary for a Grid center operations.
These include VOMS, FTS, BDII, SAM tests, and of course smooth network
services. NDGF Tier1 uses these products as provided by their respective
developers and [EGI](http://www.egi.eu/).  

### Results
 * [Availability / reliability report](http://argo.egi.eu/lavoisier/site_ar?granularity=monthly&report=Critical&site=NDGF-T1&accept=html)
 * [Accounting](https://accounting.egi.eu/egi/site/NDGF-T1/normelap_processors/)
