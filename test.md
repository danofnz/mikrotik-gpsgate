<span style="font-family:Verdana; font-size:2em;">**Configuration Profiles**</center></span><br />

[[_TOC_]]

# Development (DEV)

# Staging (STG)
<br>

**STG_2.0 Win10 - Custom - Disable Feeds**
| <div style="width:150px">**Type**</div> | <div style="width:300px">**Setting**</div> | <div style="width:700px">**Value**</div> |
|-|-|-|
| Custom | OMA-URI Settings | **Name:** Disable Feeds<br>**Description:** Not configured<BR>**OMA-URI:** ./Device/Vendor/MSFT/Policy/Config/Feeds/FeedsEnabled<BR>**Data type:** Integer<BR>**Value:** 0 |

**STG_2.0Win10 - Custom - DontDisplayNetworkSelectionUI**
| <div style="width:150px">**Type**</div> | <div style="width:300px">**Setting**</div> | <div style="width:700px">**Value**</div> |
|-|-|-|
| Custom | OMA-URI Settings | **Name:** DontDisplayNetworkSelectionUI<br>**Description:** Show the Network Selection UI on the Login/Lock Screen<BR>**OMA-URI:** ./Device/Vendor/MSFT/Policy/Config/WindowsLogon/DontDisplayNetworkSelectionUI<BR>**Data type:** String<BR>**Value:** <disabled/> |

**STG_2.0Win10 - Custom - SetEduPolicies**
| <div style="width:150px">**Type**</div> | <div style="width:300px">**Setting**</div> | <div style="width:700px">**Value**</div> |
|-|-|-|
| Custom | OMA-URI Settings | **Name:** SetEduPolicies<br>**Description:** Not configured<BR>**OMA-URI:** ./Vendor/MSFT/SharedPC/SetEduPolicies<BR>**Data type:** Boolean<BR>**Value:** True |

**STG_2.0Win10 - Custom - Update Compliance**
| <div style="width:150px">**Type**</div> | <div style="width:300px">**Setting**</div> | <div style="width:700px">**Value**</div> |
|-|-|-|
| Custom | OMA-URI Settings | **Name:** Windows Analytics Commercial ID<br>**Description:** Configuring commercial ID for Windows Analytics solutions<br>**OMA-URI:** ./Vendor/MSFT/DMClient/Provider/MS DM Server/CommercialID<br>**Data type:** String<br>**Value:** 60613dec-629e-41db-9bf9-baa937b531a4<br><br>**Name:** Windows Analytics<br>**Description:** Not configured<br>**OMA-URI:** ./Vendor/MSFT/Policy/Config/System/AllowTelemetry<br>**Data type:** Integer<br>**Value:** 1<br><br>**Name:** Windows Analytics Allow Device Name<br>**Description:** Not configured<br>**OMA-URI:** ./Vendor/MSFT/Policy/Config/System/AllowDeviceNameInDiagnosticData<br>**Data type:** Integer<br>**Value:** 1<br><br>**Name:** Allow Update Compliance Processing<br>**Description:** Not configured<br>**OMA-URI:** ./Vendor/MSFT/Policy/Config/System/AllowUpdateComplianceProcessing<br>**Data type:** Integer<br>**Value:** 16 |

**STG_2.0Win10 - Device Restrictions - Cellular & Connectivity**
| <div style="width:150px">**Type**</div> | <div style="width:300px">**Setting**</div> | <div style="width:700px">**Value**</div> |
|-|-|-|
| Device Restriction | Cellular and connectivity | **VPN over the cellular network:** Block<br>**VPN roaming over the cellular network:** Block<br>**Connected devices service:** Block<br>**NFC:** Block<br>**Automatically connect to Wi-Fi hotspots:** Block<br>**Bluetooth:** Block<br>**Bluetooth discoverability:** Block<br>**Bluetooth pre-pairing:** Block<br>**Bluetooth advertising:** Block<br>**Bluetooth proximal connections:** Block |


| **VPN over the cellular network** | Block |
| **VPN roaming over the cellular network** | Block |
| **Connected devices service:** | Block |
| **NFC:** | Block |
| **Automatically connect to Wi-Fi hotspots:** | Block |
| **Bluetooth:** | Block |
| **Bluetooth discoverability:** | Block |
| **Bluetooth pre-pairing:** | Block |
| **Bluetooth advertising:** | Block |
| **Bluetooth proximal connections:** | Block |

**STG_2.0Win10 - Device Restrictions - FENZ Branding**
**STG_2.0Win10 - Device Restrictions - Microsoft Defender Antivirus**
**STG_2.0Win10 - Device Restrictions - Password Settings**
**STG_2.0Win10 - Device Restrictions - Power Settings**
**STG_2.0Win10 - Device Restrictions - Various**
**STG_2.0Win10 - Device Restrictions - Windows Spotlight**
**STG_2.0Win10 - Windows Health Monitoring**
**STG_2.0Win10 Deployment - Device Restrictions - Start**
**STG_2.0Win10 Lockdown - Device Restrictions - Block Manual Wi-Fi**
**STG_2.0Win10 Lockdown - Device Restrictions - Block Removable Storage**
**STG_2.0Win10 Lockdown (Kiosk) - Custom - MultiApp Kiosk**
**STG_2.0Win10 Lockdown (Kiosk) - Custom - Settings Page Visibility**
**STG_2.0Win10 Lockdown (Kiosk) - Custom - Settings Page Visibility - Allow Sign-In Options & Windows Update**
**STG_2.0Win10 Lockdown (Non-Kiosk) - Custom - Settings Page Visibility - Allow All**
**STG_2.0Win10 Lockdown (Non-Kiosk) - Device Restrictions - Start**

# User-Acceptance Testing (UAT)

# Production (PROD)
