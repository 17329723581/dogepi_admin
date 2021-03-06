import { TooltipOption } from './TooltipModel';
import Model from '../../model/Model';
export declare function shouldTooltipConfine(tooltipModel: Model<TooltipOption>): boolean;
export declare const TRANSFORM_VENDOR: string;
export declare const TRANSITION_VENDOR: string;
export declare function toCSSVendorPrefix(styleVendor: string, styleProp: string): string;
export declare function getComputedStyle(el: HTMLElement, style?: string): any;
