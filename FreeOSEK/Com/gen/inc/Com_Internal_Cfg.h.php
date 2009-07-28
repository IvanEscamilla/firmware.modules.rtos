/********************************************************
 * DO NOT CHANGE THIS FILE, IT IS GENERATED AUTOMATICALY*
 ********************************************************/

/* Copyright 2008, 2009, Mariano Cerdeiro
 *
 * This file is part of FreeOSEK.
 *
 * FreeOSEK is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *             
 * Linking FreeOSEK statically or dynamically with other modules is making a
 * combined work based on FreeOSEK. Thus, the terms and conditions of the GNU
 * General Public License cover the whole combination.
 *
 * In addition, as a special exception, the copyright holders of FreeOSEK give
 * you permission to combine FreeOSEK program with free software programs or
 * libraries that are released under the GNU LGPL and with independent modules
 * that communicate with FreeOSEK solely through the FreeOSEK defined interface. 
 * You may copy and distribute such a system following the terms of the GNU GPL
 * for FreeOSEK and the licenses of the other code concerned, provided that you
 * include the source code of that other code when and as the GNU GPL requires
 * distribution of source code.
 *
 * Note that people who make modified versions of FreeOSEK are not obligated to
 * grant this special exception for their modified versions; it is their choice
 * whether to do so. The GNU General Public License gives permission to release
 * a modified version without this exception; this exception also makes it
 * possible to release a modified version which carries forward this exception.
 * 
 * FreeOSEK is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with FreeOSEK. If not, see <http://www.gnu.org/licenses/>.
 *
 */

<?php
/** \brief FreeOSEK Com File to be Generated
 **
 ** \file Com_Internal_Cfg.h.php
 **
 **/
?>

#ifndef _COM_INTERNAL_CFG_H_
#define _COM_INTERNAL_CFG_H_
/** \brief FreeOSEK Com Generated Configuration Header File
 **
 ** This file contents the generated configuration of OpenCOM
 **
 ** \file Com_Internal_Cfg.h
 **
 **/

/** \addtogroup FreeOSEK
 ** @{ */
/** \addtogroup FreeOSEK_Com
 ** @{ */
/** \addtogroup FreeOSEK_Com_Internal
 ** @{ */

/*
 * Initials     Name
 * ---------------------------
 * MaCe			 Mariano Cerdeiro
 */

/*
 * modification history (new versions first)
 * -----------------------------------------------------------
 * v0.1.0 20090711 MaCe	initial version
 */  

/*==================[inclusions]=============================================*/

/*==================[macros]=================================================*/
<?php
$configs = $config->getList("/COM", "COM");

/* COMSTATUS */
$status = $config->getValue("/COM/" . $configs[0], "COMSTATUS");
print "/** \brief Error Checking Type */\n";
if ( $status == TRUE )
{
	print "#define ERROR_CHECKING_TYPE ERROR_CHECKING_EXTENDED\n\n";
}
elseif ( $status == FALSE )
{
	print "#define ERROR_CHECKING_TYPE ERROR_CHECKING_STANDARD\n\n";
}
else
{
	warning("COMSTATUS not defined, using FALSE as default");
	print "#define ERROR_CHECKING_TYPE ERROR_CHECKING_STANDARD\n\n";
}

/* COMERRORHOOK */
$errorhook = $config->getValue("/COM/" . $configs[0], "COMERRORHOOK");
print "/** \brief ErrorHook  */\n";
if ( $errorhook == TRUE )
{
	print "#define COM_ERRORHOOK ENABLE\n\n";
}
elseif ( $errorhook == FALSE )
{
	print "#define COM_ERRORHOOK DISABLE\n\n";
}
else
{
	warning("COMERRORHOOK not defined, using FALSE as default");
	print "#define COM_ERRORHOOK DISABLE\n\n";
}

/* COMUSEGETSERVICEID */
$getsid = $config->getValue("/COM/" . $configs[0], "COMUSEGETSERVICEID");
print "/** \brief Enable or Disable GetServiceId */\n";
if ( $getsid == TRUE )
{
	print "#define COM_GETSERVICEID ENABLE\n\n";
}
elseif ( $getsid == FALSE )
{
	print "#define COM_GETSERVICEID DISABLE\n\n";
}
else
{
	warning("COMUSEGETSERVICEID not defined, using FALSE as default");
	print "#define COM_GETSERVICEID DISABLE\n\n";
}

/* COMUSEPARAMETERACCESS */
$pa = $config->getValue("/COM/" . $configs[0], "COMUSEPARAMETERACCESS");
print "/** \brief Enable or Disable USEPARAMETERACCESS */\n";
if ( $pa == TRUE )
{
	print "#define COM_USEPARAMETERACCESS ENABLE\n\n";
}
elseif ( $pa == FALSE )
{
	print "#define COM_USEPARAMETERACCESS DISABLE\n\n";
}
else
{
	warning("COMUSEPARAMETERACCESS not defined, using FALSE as default");
	print "#define COM_USEPARAMETERACCESS DISABLE\n\n";
}

/* COMSTARTCOMEXTENSION */
$se = $config->getValue("/COM/" . $configs[0], "COMSTARTCOMEXTENSION");
print "/** \brief Enable or Disable COMSTARTCOMEXTENSION */\n";
if ( $se == TRUE )
{
	print "#define COM_STARTCOMEXTENSION ENABLE\n\n";
}
elseif ( $se == FALSE )
{
	print "#define COM_COMSTARTCOMEXTENSION DISABLE\n\n";
}
else
{
	warning("COMSTARTCOMEXTENSION not defined, using FALSE as default");
	print "#define COM_COMSTARTCOMEXTENSION DISABLE\n\n";
}
?>
/*------------------[Message Objects macros declarations]---------------------*/
#define COM_MSG_PROP_TX_STAT_INT		0U
#define COM_MSG_PROP_TX_STAT_EXT		1U
#define COM_MSG_PROP_TX_ZERO_INT		2U
#define COM_MSG_PROP_TX_ZERO_EXT		3U
#define COM_MSG_PROP_RX_STAT_INT		4U
#define COM_MSG_PROP_RX_STAT_EXT		5U
#define COM_MSG_PROP_RX_ZERO_INT		6U
#define COM_MSG_PROP_RX_ZERO_EXT		7U

#define COM_MSG_TRANS_TRIGGERED		0U
#define COM_MSG_TRANS_PENDING			1U
#define COM_MSG_TRANS_AUTO				2U

#define COM_MSG_NOTIF_NONE				0U
#define COM_MSG_NOTIF_ATASK			1U
#define COM_MSG_NOTIF_SEVENT			2U
#define COM_MSG_NOTIF_CBACK			3U
#define COM_MSG_NOTIF_FLAG				4U

<?php
print "/** \brief Count of RX Messages */\n";
print "#define COM_TX_MAX_MESSAGE $com_total_tx_msg\n\n";
print "/** \brief Count of RX Messages */\n";
print "#define COM_RX_MAX_MESSAGE $com_total_rx_msg\n\n";

$timebase = $config->getList("/COM/" . $configs[0], "COMTIMEBASE");
if (count($timebase) != 1)
{
	error("only one COMTIMEBAE shall be defined, " . count($timebase) . " were found");
}
print "/** \brief COM time base macro definition */\n";
print "#define COM_TIMEBASE $timebase\n\n";



?>

/*------------------[PDU Message Objects macros declarations]-----------------*/
#define COM_TX_PDU_PERIODIC			0U
#define COM_TX_PDU_DIRECT				1U
#define COM_TX_PDU_MIXED				2U
#define COM_RX_PDU						3U

<?php
$pdus = $config->getList("/COM","IPDU");
$count_tx = 0;
print "/** \brief Definition of all Transmitted PDU Messages */\n";
foreach ($pdus as $pdu)
{
	$pduprop = $config->getValue("/COM/" . $pdu,"IPDUPROPERTY");
	if ( $pdupropprop == "SENT" )
	{
		print "/** \brief IPDU Tx $pdu */\n";
		print "#define $pdu " . $count_tx . "U\n\n";
		$count_tx++;
	}
}
$com_total_tx_pdus = $count_tx;

$count_rx = 0;
print "/** \brief Definition of all Receive PDU Messages */\n";
foreach ($pdus as $pdu)
{
	$pduprop = $config->getValue("/COM/" . $pdu,"IPDUPROPERTY");
	if ( $msgprop == "RECEIVE" )
	{
		print "/** \brief IPDU Rx $pdu */\n";
		print "#define $pdu " . $count_rx . "U\n\n";
		$count_rx++;
	}
}
$com_total_rx_pdus = $count_rx;
?>

/*------------------[Lower Layers macros declarations]------------------------*/

/*==================[typedef]================================================*/
/*------------------[Identifier type definitions]----------------------------*/
/** \brief Network Message Identifier type definition */
typedef uint8 Com_NetMsgType;

/** \brief I-PDU type definition */
/** TODO uint8 or uint16 has to depend on the account of messages */
typedef uint8 Com_IPDUType;

/*------------------[Message (and network) Objects type definitions]---------*/
/** \brief Message Flags type definition
 **
 ** \param MsgProp indicates the message properties, valid values are:
 **			- COM_MSG_PROP_TX_STAT_INT
 **			- COM_MSG_PROP_TX_STAT_EXT
 **			- COM_MSG_PROP_TX_ZERO_INT
 **			- COM_MSG_PROP_TX_ZERO_EXT
 **			- COM_MSG_PROP_RX_STAT_INT
 **			- COM_MSG_PROP_RX_STAT_EXT
 **			- COM_MSG_PROP_RX_ZERO_INT
 **			- COM_MSG_PROP_RX_ZERO_EXT
 ** \param MsgType is the type fo the message valid values are:
 **			- COM_MSG_TRANS_TRIGGERED
 **			- COM_MSG_TRANS_PENDING
 **			- COM_MSG_TRANS_AUTO
 ** \param MsgCType indicates the message callback type
 **			- COM_MSG_NOTIF_NONE
 **			- COM_MSG_NOTIF_ATASK
 **			- COM_MSG_NOTIF_SEVENT
 **			- COM_MSG_NOTIF_CBACK
 **			- COM_MSG_NOTIF_FLAG
 ** \param NetProp network message properties, valid valuesa are:
 **			- COM_NM_PROP_STATIC
 **			- COM_NM_PROP_DYNAMIC
 **			- COM_NM_PROP_ZERO
 ** \param NetBitOrd network bit ordering, valid values are:
 **			- COM_NM_BO_BIGENDIAN
 **			- COM_NM_BO_LITTLEENDIAN
 ** \param NetDataInt network message data interpretation
 **			- COM_NM_DI_UNSIGNEDINTEGER
 **			- COM_NM_DI_BYTEARRAY
 ** \param NetDirection network message data direction
 **			- COM_NM_DIR_RX
 **			- COM_NM_DIR_TX_TRIGGERED
 **			- COM_NM_DIR_TX_PENDING
 **			- COM_NM_DIR_TX_AUTO
 **/
typedef struct {
	uint16 MsgProp : 3;
	uint16 MsgType : 2;
	uint16 MsgCType : 3;
	uint16 NetProp : 2;
	uint16 NetBitOrd : 1;
	uint16 NetDataInt : 1;
	uint16 NetDirection : 2;
} Com_FlagsType;

/** \brief Transmit Message (and network) Object Const type definition
 **
 ** \param Flags	Transmit Flags, for more details see Com_FlagsType type
 **					definition
 ** \param Size	Size of the network message in bits
 ** \param Offset	Offset of the network message on the PDU
 ** \param Data	pointer to the memory to stor the data
 ** \param IPDU	IPDU for this network message
 **/
typedef struct {
	Com_FlagsType Flags;
	uint16 Size;
	uint16 Offset;
	uint32* Data;
	Com_IPDUType IPDU;
} Com_TxMessageObjectConstType;

/** \brief Receive Message (and network) Object Const type definition
 **
 ** \param Flags	Receive Flags, for more details see Com_MsgFlagsType type
 **					definition
 ** \param Size	Size of the network message in bits
 ** \param Offset	Offset of the network message on the PDU
 ** \param Data	pointer to the memory to stor the data
 ** \param IPDU	IPDU for this network message
 **/
typedef struct {
	Com_FlagsType Flags;
	uint16 Size;
	uint16 Offset;
	uint32* Data;
} Com_RxMessageObjectConstType;

/*------------------[PDU Message Objects type definitions]------------------*/
/** \brief IPDU Flags type definition
 **
 ** \param Prop is the property of the IPDU valid values are:
 **			- COM_TX_PDU_PERIODIC
 **			- COM_TX_PDU_DIRECT
 **			- COM_TX_PDU_MIXED
 **			- COM_RX_PDU
 **/
typedef struct {
	uint16 Prop : 2;
} Com_IPDUFlagsType;

/** \brief Transmit IPDU Object Const type definition
 **
 ** \param Size size in bits of the IPDU
 ** \param Flags IPDU flags, see Com_IPDUFlagsType type definition
 **/
typedef struct {
	uint16 Size;
	Com_IPDUFlagsType Flags;
	uint16 TimePeriod;
	uint16 TimeOffset;
	uint16 MinDelay;
	uint16 Timeout;
	uint8 Layer;
	uint16 LayerPDU;
} Com_TxPduObjectsConstType;

/** \brief Reception IPDU Object Const type definition
 **
 ** \param Flags IPDU flags, see Com_IPDUFlagsType type definition
 ** \param Msgs pointer to the lisf of messages receiving from this IPDU
 ** \param MsgCount amount of message on the Msgs list
 **/
typedef struct {
	Com_IPDUFlagsType Flags;
	const MessageIdentifier* Msgs;
	uint8	MsgCount;
} Com_RxPduObjectsConstType;

/*------------------[Lower Layers type definitions]-------------------------*/
/** \brief Low Layer Tx Trigger Functions */
typedef void (*Com_TxTriggerType)(uint16 IPDU);

/*==================[external data declaration]==============================*/
/*------------------[Message (and Network) Objects declarations]-------------*/
/** \brief Constants for the Message Receive Objects */
const Com_RxMessageObjectConstType Com_RxMessageObjectsConst[<?=$com_total_rx_msg?>];

/** \brief Constants for the Message Transmission Objects */
const Com_TxMessageObjectConstType Com_TxMessageObjectsConst[<?=$com_total_tx_msg?>];

/*------------------[PDU Objects declarations]-------------------------------*/
<?php
if ( $com_total_rx_pdus != 0 )
{
	print "/** \brief Constants for the PDU Receive Objects */\n";
	print "const Com_RxPduObjectsConstType Com_RxPduObjectsConst[" . $com_total_rx_pdus . "];\n\n";
}
else
{
	print "/* No reception PDU is defined, Com_RxPduObjectsConst is not declared */\n\n";
}

if ( $com_total_tx_pdus != 0 )
{
	print "/** \brief Constants for the PDU Transmit Objects */\n";
	print "const Com_TxPduObjectsConstType Com_TxPduObjectsConst[" . $com_total_tx_pdus . "];\n\n";
}
else
{
	print "/* No transmission PDU is defined, Com_TxPduObjectsConst is not declared */\n\n";
}
?>

/*------------------[Lower Layers declarations]------------------------------*/
<?php
$pdus = $config->getList("/COM","IPDU");
$count = 0;
$f = $c = $ti = $ui = $u = 0;
foreach ($pdus as $pdu)
{
	$pduprop = $config->getValue("/COM/" . $pdu,"IPDUPROPERTY");
	if ( $pdupropprop == "SENT" )
	{
		$layer = $config->getValue("/COM/" . $pdu, "LAYERUSED");
		if ( ( $layer == "TCP") && ( $ti == 0 ) )
		{
			$count++;
			$ti = 1;
		}
		if ( ( $layer == "UDP") && ( $ui == 0 ) )
		{
			$count++;
			$ui = 1;
		}
		if ( ( $layer == "CAN") && ( $c == 0 ) )
		{
			$count++;
			$c = 1;
		}
		if ( ( $layer == "FLRY") && ( $f == 0 ) )
		{
			$count++;
			$f = 1;
		}
		if ( ( $layer == "USB") && ( $u == 0 ) )
		{
			$count++;
			$u = 1;
		}
	}
}
if ( $count != 0 )
{
	print "/** \brief Lower Layer array */\n";
	print "const Com_TxTriggerType Com_TxTrigger[$count];\n\n";
}
else
{
	print "/* no Lower Layer is used, Com_TxTrigger is not declared */\n\n";
}
?>


/*==================[external functions declaration]=========================*/

/** @} doxygen end group definition */
/** @} doxygen end group definition */
/** @} doxygen end group definition */
/*==================[end of file]============================================*/
#endif /* #ifndef _COM_INTERNAL_CFG_H_ */

