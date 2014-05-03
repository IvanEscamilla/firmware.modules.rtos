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

#ifndef _PWM_ARCH_H_
#define _PWM_ARCH_H_
/** \brief FreeOSEK Driver PWM Arch Header File
 **
 ** PWM Arch Header File
 **
 ** \file arm7/lpc2xxx/Pwm_Arch.h
 ** \arch arm7/lpc2xxx
 **/

/** \addtogroup FreeOSEK
 ** @{ */
/** \addtogroup FreeOSEK_Drv
 ** @{ */
/** \addtogroup FreeOSEK_Drv_Pwm Pulse Width Modulator
 ** @{ */
/** \addtogroup FreeOSEK_Drv_Pwm_Global Global
 ** @{ */

/*
 * Initials     Name
 * ---------------------------
 * MaCe			 Mariano Cerdeiro
 */

/*
 * modification history (new versions first)
 * -----------------------------------------------------------
 * 20090522 v0.1.0 MaCe	initial version
 */

/*==================[inclusions]=============================================*/
#include "lpc2468.h"
#include "Pwm_Arch_Cfg.h"

/*==================[macros]=================================================*/
#if (PwmDevErrorDetect == DISABLE)
#define Pwm_ReadChannel_Arch(channel)	\
	Pwm_ReadChannel_Arch_ ## channel()

#define Pwm_WriteChannel_Arch(channel, value)	\
	Pwm_WriteChannel_Arch_ ## channel(value)

#endif /* #if (PwmDevErrorDetect == DISABLE) */
/*==================[typedef]================================================*/
/** \brief Numeric identifier of a PWM channel */
/* \req PWM106 */
typedef uint8 Pwm_ChannelType;

/** \brief Definition of the period of a PWM channel */
/* \req PWM107 */
typedef uint32 Pwm_PeriodType;

/** \brief Pwm Architecture dependent configuration */
typedef struct {

} Pwm_ConfigArchType;

/*==================[external data declaration]==============================*/

/*==================[external functions declaration]=========================*/

/** @} doxygen end group definition */
/** @} doxygen end group definition */
/** @} doxygen end group definition */
/** @} doxygen end group definition */
/*==================[end of file]============================================*/
#endif /* #ifndef _PWM_ARCH_H_ */

