---
inclusion: always
---

# Design System Rules

This document contains the design system rules and guidelines for maintaining consistency between Figma designs and code implementation.

## Component Guidelines

- Treat Figma MCP output (React + Tailwind) as a representation of design and behavior, not as final code style
- Replace Tailwind utility classes with the project's preferred utilities/design-system tokens when applicable
- Reuse existing components (e.g., buttons, inputs, typography, icon wrappers) instead of duplicating functionality
- Use the project's color system, typography scale, and spacing tokens consistently
- Respect existing routing, state management, and data-fetch patterns already adopted in the repo

## Design Fidelity

- Strive for 1:1 visual parity with the Figma design
- When conflicts arise, prefer design-system tokens and adjust spacing or sizes minimally to match visuals
- Validate the final UI against the Figma screenshot for both look and behavior

## Code Connect Integration

- Components should be mapped to their corresponding Figma components
- Use the Figma Code Connect tools to maintain this mapping
- Ensure component names match between code and Figma when possible

*This file will be automatically updated with project-specific design system rules once the Figma MCP server is connected.*