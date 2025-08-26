#!/bin/bash
set -euo pipefail

echo "Step 1: This will fail"
ls /does/not/exist

echo "Step 2: This never runs"
