#error this is a remember to remove the comment on the following line
/*****************************************************************************
 * add your copyright notice
 * Copyright <year>, <your name>
 *
 * Please do not change the license on a single file, if you want to change it
 * discuss it with the development team.
 *
 * PLEASE REMOVE THIS COMMENT
 *****************************************************************************/

/* Copyright 2008, 2009, Mariano Cerdeiro
 * Copyright 2008, Kang Li
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

#ifndef _OS_ARCH_H_
#define _OS_ARCH_H_
/** \brief FreeOSEK Os Architecture Dependent Header File
 **
 ** This file is included form os.h and defines macros
 ** and types which depends on the architecture.
 **
 ** \file s12x/Os_Arch.h
 ** \arch s12x
 **
 **/

/** \addtogroup FreeOSEK
 ** @{ */
/** \addtogroup FreeOSEK_Os
 ** @{ */
/** \addtogroup FreeOSEK_Os_Global
 ** @{ */


/*
 * Initials     Name
 * ---------------------------
 * MaCe			 Mariano Cerdeiro
 * KLi			 Kang Li
 */

/*
 * modification history (new versions first)
 * -----------------------------------------------------------
 * 20081101 v0.1.0 KLi  initial version
 */

/*==================[inclusions]=============================================*/

/*==================[macros]=================================================*/
/** \brief Enable All Interrupts Arch */
#define EnableAllInterrupts_Arch()	{__asm CLI;}

/** \brief Disable All Interrupts Arch */
#define DisableAllInterrupts_Arch() {__asm SEI;}

/** \brief Resume All Interrupts Arch */
#define ResumeAllInterrupts_Arch()						                        \
	{																                        \
	   if ((ConditionCodeRegType)0 == (Suspended_CCR & 0x10))               \
      {                                                                    \
         __asm CLI;                                                        \
      }                                                                    \
	}

/** \brief Suspend All Interrupts Arch */
#define SuspendAllInterrupts_Arch()						                        \
	{																                        \
	   if ((InterruptCounterType)1 == SuspendAllInterrupts_Counter)       \
      {                                                                    \
         __asm TPA;                                                        \
         __asm STAA Suspended_CCR;                                         \
         __asm SEI;                                                        \
      }                                                                    \
	}

/** \brief Resume OS Interrupts Arch */
#define ResumeOSInterrupts_Arch()

/** \brief Suspend OS Interrupts Arch */
#define SuspendOSInterrupts_Arch()

/*==================[typedef]================================================*/
#error this is a remember to remove the comment on the following line
/*****************************************************************************
 * Please define here all needed types that will be visible to the OS user
 * for this architecutre. This means that anyone including os.h will have
 * access to these type definitions if the actual architecutre is used.
 * Normaly no type has to be declared here.
 *
 * PLEASE REMOVE THIS COMMENT
 *****************************************************************************/

/*==================[external data declaration]==============================*/
#error this is a remember to remove the comment on the following line
/*****************************************************************************
 * Please declare here all exported data defined in Osek_Arch.c that will
 * be visible to the OS user for this architectire. This means that anyone
 * including os.h will have access to these variables, if the actual
 * architecutre is used. Normaly no variables has to be declared here.
 *
 * PLEASE REMOVE THIS COMMENT
 *****************************************************************************/

/*==================[external functions declaration]=========================*/
#error this is a remember to remove the comment on the following line
/*****************************************************************************
 * Please declare here all exported functions defined in Osek_Arch.c that will
 * be visible to the OS user for this architectire. This means that anyone
 * including os.h will have access to these variables, if the actual
 * architecutre is used. Normaly no variables has to be declared here.
 *
 * PLEASE REMOVE THIS COMMENT
 *****************************************************************************/

/** @} doxygen end group definition */
/** @} doxygen end group definition */
/** @} doxygen end group definition */
/*==================[end of file]============================================*/
#endif /* #ifndef _OS_ARCH_H_ */

