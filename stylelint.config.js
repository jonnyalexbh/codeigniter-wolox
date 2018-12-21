'use strict';

module.exports = {
  "plugins": [
    "stylelint-scss",
    "stylelint-no-indistinguishable-colors"
  ],
  "rules": {
    "plugin/stylelint-no-indistinguishable-colors": true,
    "scss/at-extend-no-missing-placeholder": true,
    "scss/at-import-no-partial-leading-underscore": true,
    "scss/at-import-partial-extension-blacklist": ["scss"],
    "scss/at-mixin-argumentless-call-parentheses": "always",
    "scss/at-mixin-named-arguments": "never",
    "scss/at-mixin-parentheses-space-before": "always",
    "scss/dollar-variable-colon-space-after": "always",
    "scss/dollar-variable-colon-space-before": "never",
    "scss/dollar-variable-pattern": /^[a-z]+(-[a-z]+)*$/,
    "scss/percent-placeholder-pattern": /^[a-z]+(-[a-z]+)*$/,
    "scss/double-slash-comment-whitespace-inside": "always",
    "scss/media-feature-value-dollar-variable": "always",
    "scss/operator-no-newline-after": true,
    "scss/operator-no-newline-before": true,
    "scss/operator-no-unspaced": true,
    "scss/partial-no-import": true,
    "scss/selector-no-redundant-nesting-selector": true,
    "scss/no-duplicate-dollar-variables": true,
    "at-rule-blacklist": null,
    "at-rule-empty-line-before": "always",
    "at-rule-name-case": "lower",
    "at-rule-name-newline-after": null,
    "at-rule-name-space-after": "always",
    "at-rule-no-unknown": true,
    "at-rule-no-vendor-prefix": null,
    "at-rule-semicolon-newline-after": "always",
    "at-rule-semicolon-space-before": "never",
    "at-rule-whitelist": null,
    "block-closing-brace-empty-line-before": "never",
    "block-closing-brace-newline-after": "always-multi-line",
    "block-closing-brace-newline-before": "always",
    "block-closing-brace-space-after": "always-single-line",
    "block-closing-brace-space-before": null,
    "block-no-empty": true,
    "block-opening-brace-newline-after": "always",
    "block-opening-brace-newline-before": null,
    "block-opening-brace-space-after": null,
    "block-opening-brace-space-before": "always",
    "color-hex-case": "upper",
    "color-hex-length": "short",
    "color-named": "never",
    "color-no-hex": null,
    "color-no-invalid-hex": true,
    "comment-empty-line-before": "never",
    "comment-no-empty": true,
    "comment-whitespace-inside": "always",
    "comment-word-blacklist": null,
    "custom-media-pattern": null,
    "custom-property-empty-line-before": "never",
    "custom-property-pattern": null,
    "declaration-bang-space-after": "never",
    "declaration-bang-space-before": "always",
    "declaration-block-no-duplicate-properties": true,
    "declaration-block-no-redundant-longhand-properties": true,
    "declaration-block-no-shorthand-property-overrides": true,
    "declaration-block-semicolon-newline-after": "always",
    "declaration-block-semicolon-newline-before": "never-multi-line",
    "declaration-block-semicolon-space-after": "always-single-line",
    "declaration-block-semicolon-space-before": "never",
    "declaration-block-single-line-max-declarations": 0,
    "declaration-block-trailing-semicolon": "always",
    "declaration-colon-newline-after": null,
    "declaration-colon-space-after": "always",
    "declaration-colon-space-before": "never",
    "declaration-empty-line-before": "never",
    "declaration-no-important": true,
    "declaration-property-unit-blacklist": {
      "/[a-zA-Z]+/": [
        "em",
        "rem"
      ],
    },
    "declaration-property-unit-whitelist": {
      "line-height": ["px"],
      "/^animation/": ["s"],
      "/^transition/": ["s"]
    },
    "declaration-property-value-blacklist": null,
    "declaration-property-value-whitelist": null,
    "font-family-name-quotes": "always-where-recommended",
    "font-family-no-duplicate-names": true,
    "font-family-no-missing-generic-family-keyword": null,
    "font-weight-notation": "numeric",
    "function-blacklist": ["rgb"],
    "function-calc-no-unspaced-operator": true,
    "function-comma-newline-after": "never-multi-line",
    "function-comma-newline-before": "never-multi-line",
    "function-comma-space-after": "always",
    "function-comma-space-before": "never",
    "function-linear-gradient-no-nonstandard-direction": true,
    "function-max-empty-lines": 0,
    "function-name-case": "lower",
    "function-parentheses-newline-inside": "never-multi-line",
    "function-parentheses-space-inside": "never",
    "function-url-no-scheme-relative": true,
    "function-url-quotes": "always",
    "function-url-scheme-blacklist": [
      "/^http:/",
      "data"
    ],
    "function-url-scheme-whitelist": null,
    "function-whitelist": null,
    "function-whitespace-after": "always",
    "indentation": 2,
    "keyframe-declaration-no-important": true,
    "keyframes-name-pattern": null,

    "length-zero-no-unit": true,
    "linebreaks": "unix",
    "max-empty-lines": 1,
    "max-line-length": [100, {
      "ignore": ["comments"]
    }],
    "max-nesting-depth": 3,
    "media-feature-colon-space-after": "always",
    "media-feature-colon-space-before": "never",
    "media-feature-name-blacklist": null,
    "media-feature-name-case": "lower",
    "media-feature-name-no-unknown": true,
    "media-feature-name-no-vendor-prefix": null,
    "media-feature-name-value-whitelist": null,
    "media-feature-name-whitelist": null,
    "media-feature-parentheses-space-inside": "never",
    "media-feature-range-operator-space-after": "always",
    "media-feature-range-operator-space-before": "always",
    "media-query-list-comma-newline-after": "never-multi-line",
    "media-query-list-comma-newline-before": "never-multi-line",
    "media-query-list-comma-space-after": "always",
    "media-query-list-comma-space-before": "never",
    "no-descending-specificity": true,
    "no-duplicate-at-import-rules": true,
    "no-duplicate-selectors": true,
    "no-empty-source": true,
    "no-eol-whitespace": true,
    "no-extra-semicolons": true,
    "no-invalid-double-slash-comments": true,
    "no-missing-end-of-source-newline": true,
    "no-unknown-animations": true,
    "number-leading-zero": "always",
    "number-max-precision": 2,
    "number-no-trailing-zeros": true,
    "property-blacklist": null,
    "property-case": "lower",
    "property-no-unknown": true,
    "property-no-vendor-prefix": true,
    "property-whitelist": null,
    "rule-empty-line-before": "always",
    "selector-attribute-brackets-space-inside": "never",
    "selector-attribute-operator-blacklist": null,
    "selector-attribute-operator-space-after": "never",
    "selector-attribute-operator-space-before": "never",
    "selector-attribute-operator-whitelist": null,
    "selector-attribute-quotes": "always",
    "selector-class-pattern": "^[a-z]+(-[a-z]+)*$",
    "selector-combinator-blacklist": null,
    "selector-combinator-space-after": "always",
    "selector-combinator-space-before": "always",
    "selector-combinator-whitelist": null,
    "selector-descendant-combinator-no-non-space": true,
    "selector-id-pattern": null,
    "selector-list-comma-newline-after": "always",
    "selector-list-comma-newline-before": "never-multi-line",
    "selector-list-comma-space-after": null,
    "selector-list-comma-space-before": "never",
    "selector-max-attribute": 0,
    "selector-max-class": 3,
    "selector-max-combinators": 2,
    "selector-max-compound-selectors": 3,
    "selector-max-empty-lines": 0,
    "selector-max-id": 0,
    "selector-max-pseudo-class": 3,
    "selector-max-specificity": null,
    "selector-max-type": 0,
    "selector-max-universal": null,
    "selector-nested-pattern": null,
    "selector-no-qualifying-type": true,
    "selector-no-vendor-prefix": true,
    "selector-pseudo-class-blacklist": null,
    "selector-pseudo-class-case": "lower",
    "selector-pseudo-class-no-unknown": true,
    "selector-pseudo-class-parentheses-space-inside": "never",
    "selector-pseudo-class-whitelist": null,
    "selector-pseudo-element-blacklist": null,
    "selector-pseudo-element-case": "lower",
    "selector-pseudo-element-colon-notation": "double",
    "selector-pseudo-element-no-unknown": true,
    "selector-pseudo-element-whitelist": null,
    "selector-type-case": "lower",
    "selector-type-no-unknown": true,
    "shorthand-property-no-redundant-values": true,
    "string-no-newline": true,
    "string-quotes": "single",
    "time-min-milliseconds": 100,
    "unit-blacklist": null,
    "unit-case": "lower",
    "unit-no-unknown": true,
    "unit-whitelist": null,
    "value-keyword-case": "lower",
    "value-list-comma-newline-after": "never-multi-line",
    "value-list-comma-newline-before": "never-multi-line",
    "value-list-comma-space-after": "always",
    "value-list-comma-space-before": "never",
    "value-list-max-empty-lines": 0,
    "value-no-vendor-prefix": true
  }
}