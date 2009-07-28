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

/** \brief FreeOSEK Com Generated Configuration Implementation File
 **
 ** \file Com_Internal_Cfg.c
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
 * MaCe         Mariano Cerdeiro
 */

/*
 * modification history (new versions first)
 * -----------------------------------------------------------
 * 20090708 v0.1.0 MaCe initial version
 */

/*==================[inclusions]=============================================*/
#include "Com_Internal.h"

/*==================[macros and definitions]=================================*/

/*==================[internal data declaration]==============================*/

/*==================[internal functions declaration]=========================*/

/*==================[internal data definition]===============================*/

/*==================[external data definition]===============================*/
/*------------------[Message (and Network) Objects declarations]-------------*/
<?php
$messages = $config->getList("/COM","MESSAGE");
$count = 0;
print "/** \brief Constants for the Message Receive Objects definition */\n";
print "const Com_RxMessageObjectConstType Com_RxMessageObjectsConst[<?=$com_total_rx_msg?>] =\n";
print "{\n";
$messages = $config->getList("/COM","MESSAGE");
foreach ($messages as $msg)
{
	$msgprop = $config->getValue("/COM/" . $msg, "MESSAGEPROPERTY");
	$msgtrans = $config->getValue("/COM/" . $msg . "/" . $msgprop, "TRANSFERPROPERTY");
	$msgnotif = $config->getValue("/COM/" . $msg . "/" . $msgprop, "NOTIFICATION");
	if ( strpos($msgprop,"SEND") > -1 )
	{
		/* add , */
		if ($count > 0)
		{
			print ",\n";
		}
		print "	/* Receive Message Object: $msg */\n";
		print "	{\n";
		print "		/* flags */\n";
		print "		{\n";
		switch ($msgprop)
		{
			case "SEND_STATIC_INTERNAL" :
				print "			COM_MSG_PROP_TX_STAT_INT";
				break;
			case "SEND_STATIC_EXTERNAL" :
				print "			COM_MSG_PROP_TX_STAT_EXT";
				break;
			case "SEND_ZERO_INTERNAL" :
				print "			COM_MSG_PROP_TX_ZERO_INT";
				break;
			case "SEND_ZERO_EXTERNAL" :
				print "			COM_MSG_PROP_TX_ZERO_EXT";
				break;
			case "RECEIVE_ZERO_INTERNAL" :
				print "			COM_MSG_PROP_RX_ZERO_INT";
				break;
			case "RECEIVE_ZERO_EXTERNAL" :
				print "			COM_MSG_PROP_RX_ZERO_EXT";
				break;
			case "RECEIVE_UNQUEUED_INTERNAL" :
				print "			COM_MSG_PROP_RX_STAT_INT";
				break;
			case "RECEIVE_UNQUEUED_EXTERNAL" :
				print "			COM_MSG_PROP_RX_STAT_EXT";
				break;
			default :
				error("the MESSAGEPROPERTY of the message $msg is set to $msgprop what is invalid or not supported");
				break;
		}
		print ", /* message properties */\n";
		switch ($msgtrans)
		{
			case "TRIGGERED" :
				print "			COM_MSG_TRANS_TRIGGERED";
				break;
			case "PENDING" :
				print "			COM_MSG_TRANS_PENDING";
				break;
			case "AUTO" :
				print "			COM_MSG_TRANS_AUTO";
				break;
			default :
				error("the TRANSFERPROPERTY of the message of the message $msg  is set to $msgtrans what is invalid or not supported");
				break;
		}
		print ", /* message transfer property */\n";
		switch ($msgnotif)
		{
			case "NONE" :
				print "			COM_MSG_NOTIF_NONE";
				break;
			case "ACTIVATETASK" :
				print "			COM_MSG_NOTIF_ATASK";
				break;
			case "SETEVENT" :
				print "			COM_MSG_NOTIF_SEVENT";
				break;
			case "COMCALLBACK" :
				print "			COM_MSG_NOTIF_CBACK";
				break;
			case "FLAG" :
				print "			COM_MSG_NOTIF_FLAG";
				break;
			default :
				error("the NOTIFICATION of the message $msg is set to $msgnotif what is invalid or not supported");
				break;
		}
		print ", /* message callback type */\n";
		print "			0, /* network properties */\n";
		print "			0, /* network bitorder */\n";
		print "			0, /* network data interpretation */\n";
		print "			 /* network direction */\n";
		print "		},\n";
		print "		0, /* size */\n";
		print "		0, /* offset */\n";
		print "		0 /* data pointer */\n";
		print "	}";
		$count++;
	}
}
print "\n}\n";
?>

/*==================[internal functions definition]==========================*/

/*==================[external functions definition]==========================*/

/** @} doxygen end group definition */
/** @} doxygen end group definition */
/** @} doxygen end group definition */
/*==================[end of file]============================================*/

